<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemasukanController extends Controller
{
    public function index()
    {
        $items = Pemasukan::latest()->get();
        return view('admin.pages.pemasukan.index', [
            'title' => 'Pemasukan',
            'items' => $items
        ]);
    }

    public function create()
    {
        $proyeks = Proyek::latest()->get();
        return view('admin.pages.pemasukan.create', [
            'title' => 'Tambah Pemasukan',
            'proyeks' => $proyeks,
        ]);
    }

    public function store()
    {
        request()->validate([
            'proyek_id' => ['required'],
            'kode' => ['required'],
            'jumlah' => ['required'],
            'tanggal' => ['required'],
            'uraian' => ['required']
        ]);

        DB::beginTransaction();
        try {
            $data = request()->all();
            Pemasukan::create($data);
            DB::commit();
            return redirect()->route('admin.pemasukan.index')->with('success', 'Pemasukan berhasil ditambahkan.');
        } catch (\Throwable $th) {
            DB::rollBack();
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $item = Pemasukan::findOrFail($id);
        return view('admin.pages.pemasukan.edit', [
            'title' => 'Edit Pemasukan',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'kode' => ['required'],
            'jumlah' => ['required'],
            'tanggal' => ['required'],
            'uraian' => ['required']
        ]);
        DB::beginTransaction();
        try {
            $item = Pemasukan::findOrFail($id);
            $data = request()->all();
            $item->update($data);
            DB::commit();
            return redirect()->route('admin.pemasukan.index')->with('success', 'Pemasukan berhasil diupdate.');
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
            $item = Pemasukan::findOrFail($id);
            $item->delete();
            DB::commit();
            return redirect()->route('admin.pemasukan.index')->with('success', 'Pemasukan berhasil dihapus.');
        } catch (\Throwable $th) {
            DB::rollBack();
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
