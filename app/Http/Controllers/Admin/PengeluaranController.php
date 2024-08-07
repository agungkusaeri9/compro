<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriPengeluaran;
use App\Models\Pengeluaran;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
    public function index()
    {
        $items = Pengeluaran::latest()->get();
        return view('admin.pages.pengeluaran.index', [
            'title' => 'Pengeluaran',
            'items' => $items
        ]);
    }

    public function create()
    {
        $proyeks = Proyek::latest()->get();
        $kategories = KategoriPengeluaran::orderBy('nama', 'ASC')->get();
        return view('admin.pages.pengeluaran.create', [
            'title' => 'Tambah Pengeluaran',
            'proyeks' => $proyeks,
            'kategories' => $kategories
        ]);
    }

    public function store()
    {
        request()->validate([
            'proyek_id' => ['required'],
            'kategori_pengeluaran_id' => ['required'],
            'kode' => ['required'],
            'jumlah' => ['required'],
            'tanggal' => ['required'],
            'uraian' => ['required']
        ]);

        DB::beginTransaction();
        try {
            $data = request()->all();
            Pengeluaran::create($data);
            DB::commit();
            return redirect()->route('admin.pengeluaran.index')->with('success', 'Pengeluaran berhasil ditambahkan.');
        } catch (\Throwable $th) {
            DB::rollBack();
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Pengeluaran::findOrFail($id);
        $kategories = KategoriPengeluaran::orderBy('nama', 'ASC')->get();
        return view('admin.pages.pengeluaran.edit', [
            'title' => 'Edit Pengeluaran',
            'item' => $item,
            'kategories' => $kategories
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'kode' => ['required'],
            'kategori_pengeluaran_id' => ['required'],
            'jumlah' => ['required'],
            'tanggal' => ['required'],
            'uraian' => ['required']
        ]);
        DB::beginTransaction();
        try {
            $item = Pengeluaran::findOrFail($id);
            $data = request()->all();
            $item->update($data);
            DB::commit();
            return redirect()->route('admin.pengeluaran.index')->with('success', 'Pengeluaran berhasil diupdate.');
        } catch (\Throwable $th) {
            DB::rollBack();
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {

        DB::beginTransaction();
        try {
            $item = Pengeluaran::findOrFail($id);
            $item->delete();
            DB::commit();
            return redirect()->route('admin.pengeluaran.index')->with('success', 'Pengeluaran berhasil dihapus.');
        } catch (\Throwable $th) {
            DB::rollBack();
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
