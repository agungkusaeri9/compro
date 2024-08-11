@extends('frontend.layouts.app')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content pe-5">
                    <h2>{{ $item->nama }}</h2>
                    <p>{{ $item->deskripsi }}</p>

                    <h5>Galeri</h5>
                    <div class="row">
                        @forelse ($item->gambar as $gambar)
                            <div class="col-md-4">
                                <a href="{{ $gambar->gambar() }}" data-toggle="lightbox" data-caption="{{ $item->nama }}">
                                    <img src="{{ $gambar->gambar() }}" class="img-fluid">
                                </a>
                            </div>
                        @empty
                            <div class="col-md">
                                <p class="text-center">Tidak ada data!</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script>
        $(function() {
            document.querySelectorAll('.my-lightbox-toggle').forEach((el) => el.addEventListener('click', (e) => {
                e.preventDefault();
                const lightbox = new Lightbox(el, options);
                lightbox.show();
            }));
        })
    </script>
@endpush
