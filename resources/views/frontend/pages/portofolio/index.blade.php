@extends('frontend.layouts.app')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                    <h3 class=" mb-5">Pengalaman Perusahaan</h3>
                </div>
            </div>
            <div class="row">
                @forelse ($items as $item)
                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="media-entry">
                            <a href="{{ route('portofolio.show', $item->id) }}">
                                <img src="{{ $item->gambar_utama() }}" alt="Image" class="img-fluid">
                            </a>
                            <div class="bg-white m-body">
                                <span class="date">{{ $item->created_at->translatedFormat('d, F Y') }}</span>
                                <h3><a href="{{ route('portofolio.show', $item->id) }}">{{ $item->nama }}</a></h3>
                                <p>{{ \Str::limit($item->deskripsi, 130) }}</p>

                                <a href="single.html" class="more d-flex align-items-end float-end">
                                    <span class="label">Lihat Selengkapnya</span>
                                    <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
