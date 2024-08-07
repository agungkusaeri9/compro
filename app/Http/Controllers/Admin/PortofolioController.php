<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    public function index()
    {
        $items = Portofolio::orderBy('nama', 'ASC')->get();
        return view('admin.pages.portofolio.index', [
            'title' => 'Portofolio',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('admin.pages.portofolio.create', [
            'title' => 'Tambah Portofolio'
        ]);
    }

    public function store()
    {
        request()->validate([
            'nama' => ['required'],
            'deskripsi' => ['required'],
            'gambar' => ['required', 'array'],
            'gambar.*' => ['image'],
        ]);

        DB::beginTransaction();
        try {
            $data = request()->only(['nama', 'deskripsi', 'nilai_proyek']);
            $data_gambar = request()->file('gambar');
            $portofolio = Portofolio::create($data);
            foreach ($data_gambar as $gambar) {
                $portofolio->gambar()->create([
                    'gambar' => $gambar->store('portofolio-gambar', 'public')
                ]);
            }
            DB::commit();
            return redirect()->route('admin.portofolio.index')->with('success', 'Portofolio berhasil ditambahkan.');
        } catch (\Throwable $th) {
            DB::rollBack();
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {

        $item = Portofolio::findOrFail($id);
        return view('admin.pages.portofolio.edit', [
            'title' => 'Edit Portofolio',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'nama' => ['required'],
            'tanggal_mulai' => ['required', 'date'],
            'tanggal_akhir' => ['required', 'date'],
        ]);
        DB::beginTransaction();
        try {
            $item = Portofolio::findOrFail($id);
            $data = request()->all();
            $item->update($data);
            DB::commit();
            return redirect()->route('admin.portofolio.index')->with('success', 'Portofolio berhasil diupdate.');
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
            $item = Portofolio::findOrFail($id);
            $item->delete();
            DB::commit();
            return redirect()->route('admin.portofolio.index')->with('success', 'Portofolio berhasil dihapus.');
        } catch (\Throwable $th) {
            DB::rollBack();
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
