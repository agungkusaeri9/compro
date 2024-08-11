@extends('frontend.layouts.app')
@section('content')
    <div class="section">
        <div class="container">
            <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                <h3>Struktur Organisasi</h3>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div id="tree"></div>
                    </div>
                </div>
            </div>
            <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                <h3>Personil Perusahaan</h3>
                <div class="row">
                    @foreach ($personils as $personil)
                        <div class="col-md-4">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ $personil->gambar() }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $personil->nama }}</h5>
                                            <p class="card-text">{{ \Str::limit($personil->deskripsi, 90) }}</p>
                                            <p class="card-text"><small
                                                    class="text-body-secondary">{{ $personil->created_at->diffForHumans() }}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                <h3>Peralatan Perusahaan</h3>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>Jumlah</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($peralatans as $peralatan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $peralatan->nama }}</td>
                                        <td>{{ $peralatan->merk->nama ?? '-' }}</td>
                                        <td>{{ $peralatan->type->nama ?? '-' }}</td>
                                        <td>{{ $peralatan->jumlah }}</td>
                                        <td>{{ $peralatan->deskripsi }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="6">Tidak Ada Data!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/vendors/orgchart.js') }}"></script>
    <script>
        let chart = new OrgChart("#tree", {
            // Menonaktifkan fitur pencarian
            search: false,
            nodeBinding: {
                field_0: "name"
            },
            nodes: [{
                    id: 1,
                    name: "David"
                },
                {
                    id: 2,
                    pid: 2,
                    name: "Diogo"
                },
                {
                    id: 3,
                    pid: 1,
                    name: "Evans"
                },
                {
                    id: 4,
                    pid: 1,
                    name: "Luke"
                },
                {
                    id: 5,
                    pid: 1,
                    name: "Tominay"
                }, {
                    id: 6,
                    pid: 4,
                    name: "Dailo"
                }, {
                    id: 7,
                    pid: 5,
                    name: "Marcus"
                }, {
                    id: 8,
                    pid: 1,
                    name: "Joe"
                }
            ]
        });
    </script>
@endpush
