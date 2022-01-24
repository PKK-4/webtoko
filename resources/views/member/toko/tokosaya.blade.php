@extends('layouts.member')

@section('navbar')


    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center bg-success">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="index.html"><img src="/assets/img/logo.png" alt="logo" style="width: 50px; height: 50px;"></a>
                <p class="navbar-brand brand-logo text-white" style="line-height: 16px; font-size: 18px; font-weight: 500; padding-right: 35px; padding-top: 15px;">Member
                    <br><span style="font-weight: 200; font-size: 15px;">BOOMBEST.net</span></p>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/assets/img/logo.png" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant text-white"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-success">
            <ul class="navbar-nav mr-lg-4 w-100">
                <li class="nav-item nav-search d-none d-lg-block w-100">
                    @foreach($toko as $item)
                        @if($item->id_member == auth()->user()->id)
                        <form action="{{ url("/searchmybarangintoko/$item->id_member") }}" method="GET" class="search cari">
                            @endif
                      @endforeach
                            <div class="input-group">
                                <div class="input-group-prepend">
                          <span class="input-group-text" id="search">
                            <i class="mdi mdi-magnify"></i>
                          </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search" value="{{Request::get('keyword')}}"  name="keyword">
                            </div>
                        </form>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown mr-4">


                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        @if(auth()->user()->image_profile == '')
			<img src="/assets/img/member/profile.png" alt="profile"/>
			@else
                        <img src="{{ url('/profPicMember/'. auth()->user()->image_profile ) }}" alt="profile"/>
			@endif
			<span class="nav-profile-name text-white" style="text-transform: capitalize;">{{ auth()->user()->username }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                        <a href="{{ route('home') }}" class="dropdown-item">
                            <i class="mdi mdi-logout text-primary"></i>
                            Kembali
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>


@endsection

@section('content')

  	<div class="container">
	<div class="row justify-content-end">
	@if(session()->get('success'))
  	 <div class="alert alert-block col-md-3" data-dismiss="alert" data-aos="fade-up" data-aos-duration="1000" style="background: rgba(3, 121, 3, 0.582);">
      	    <button type="button" class="close mx-1" data-dismiss="alert" style="margin-top: -3px;"><i class="fa fa-times" aria-hidden="true"></i></button>
      	    <strong>Hore, {{ auth()->user()->username }}!!!</strong> {{ session()->get('success') }}.
  	  </div>
  	 @endif
	</div>
	</div>

     <div class="col-md-12 grid-margin">
      <div class="row container">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="mr-md-3 mr-xl-5">
                <h2>Halaman Toko Anda </h2>
                <p class="mb-md-0">Tampilan Toko Anda.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

        @foreach($toko as $item)
            @if($item->id_member == auth()->user()->id)
            <div class="mx-2">
              <div class="px-2 py-5" style="border-radius: 10px;
              box-shadow:  -3px -3px 4px rgba(0,0,0,0.4);
              border: 1px solid grey;
              background: #2DAD29;">
                <div class="col-md-12">
                  <div class="m-auto">
                    <a type="button" data-toggle="modal" data-target="#detail{{ $item->id }}" style="text-decoration: none;">
                      <div class="row">
                        <img class="mx-3" src="{{ url('foto_toko/'. $item->img_toko) }}" alt=""
                        style="background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover; border-radius: 50%;
                        width: 150px;
                        height: 150px;">
                        <div class="mx-3 mt-4">
                          <h2 class="text-white" style="font-size: 30px; text-transform: capitalize; line-height: 25px;">{{ $item->nama_toko }}</h2>
                          <span class="text-white" style="font-size: 15px; text-transform: capitalize;">{{ $item->deskripsi }}</span><br><br>
                          <span class="text-white" style="font-size: 15px; text-transform: capitalize; font-weight: 700;">{{ $item->alamat_toko }}</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endif
        @endforeach


      <section class="products-grid mt-5">
          <div class="container">
              <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="products-top bg-success">
                                  <div class="products-top-inner">
                                      <div class="products-found">
                                          <p><span class="text-white">Produk Saya</span></p>
                                      </div>
                                      <div class="products-sort">
                                          <br>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="row mt-3">
                        <!--produk-->
                        @forelse($barang as $item)
                        @if($item->id_member == auth()->user()->id)
                        <div class="col-xl-3 col-lg-4 col-md-4 col-6 p-1">
                          <a href="/tokosaya/detail/{{ $item->id }}">
                            <div class="single-product bg-white">
                                <div class="product-img m-1">
                                    <a href="/tokosaya/detail/{{ $item->id }}">
                                        <img src="{{ url('products/'. $item->img_barang) }}" class="img-fluid"
                                        style="background-size: cover; background-position: center;">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="text-truncate"><a href="/tokosaya/detail/{{ $item->id }}">{{ $item->nama_barang }}</a></h3>
                                </div>
                            </div>
                          </a>
                        </div>
                        <!--end produk-->
                        @endif
                        @empty
                        <div class="container p-auto pt-5">
                          <div class="d-flex justify-content-center">
                            <i class="fas fa-exclamation-circle mb-3 bg-warning" style="font-size: 100px;
                            border-radius: 50%; box-shadow:  4px 4px 8px rgba(0,0,0,0.9);"></i>
                          </div>
                          <p class="text-center" style="font-size: 18px; font-weight: 400;">Anda Belum Menambahkan Produk <br> Silakan Tambah Produk Anda!!</p>
                        </div>
                        @endforelse
                    </div>


              </div>
            </div>
          </div>
      </section>


    </div>

<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-2"></div>

@foreach ($barang as $item)
<div class="modal fade" id="delete{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama_barang }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Yakin Ingin Menghapus Barang Ini?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        <a href="/produksaya/delete/{{ $item->id }}" class="btn btn-danger">Yes</a>
      </div>
    </div>
  </div>
</div>
@endforeach

@foreach($toko as $item)
@if($item->id_member == auth()->user()->id)
<div class="modal fade" id="detail{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white" id="staticBackdropLabel">{{ $item->nama_toko }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <section class="products-grid">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-8 col-12">


                        <div class="justify-content-start p-2">

                            <form action="/tokosaya/edittoko/post/{{ $item->id_member  }}" method="POST" enctype="multipart/form-data">

                                <!--img upload--->
                                <p class="image_upload mb-5">
                                    <label class="img-upload">
                                        <style media="screen">
                                            .bg-img{
                                                background: white;
                                                border-radius: 50%;
                                                border: 1px solid gray;
                                            }
                                        </style>
                                        <img src="{{ url('foto_toko/'. $item->img_toko) }}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                                        <label class="btn-input">
                                            <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_toko" id="preview_gambar">
                                            <i class="fa fa-upload" aria-hidden="true"></i><br>
                                            Choise your <br>file img
                                        </label>
                                    </label>
                                </p>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <!--img upload--->


                                <div class="mb-3 col-md-6">
                                    <label for="nama_toko" class="form-label">Nama Toko</label>
                                    <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder=".." value="{{ $item->nama_toko }}">
                                </div>


                                <div class="d-flex">
                                    <div class="mb-3 col-md-4">
                                          <label for="instagram" class="form-label">Instagram</label>
                                          <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram anda" value="{{ $item->instagram }}">
                                </div>

                                    <div class="mb-3 col-md-4">
                                          <label for="namabarang" class="form-label">Link Instagram</label>
                                          <input type="text" class="form-control" name="link_ig" id="namabarang" placeholder="https//:....." value="{{ $item->link_ig }}">
                                    </div>
                                  </div>

                                  <div class="d-flex">
                                    <div class="mb-3 col-md-4">
                                          <label for="namabarang" class="form-label">Facebook</label>
                                          <input type="text" class="form-control" name="facebook" id="namabarang" placeholder="Facebook anda" value="{{ $item->facebook }}">
                                </div>

                                    <div class="mb-3 col-md-4">
                                          <label for="namabarang" class="form-label">Link Facebook</label>
                                          <input type="text" class="form-control" name="link_fb" id="namabarang" placeholder="https//:....." value="{{ $item->link_fb }}">

                                    </div>
                                  </div>


                                  <div class="mb-3 col-md-6">
                                                <label for="wa" class="form-label">WhatsAap</label>
                                                <input type="number" class="form-control" name="telpon" id="wa" placeholder="+62,..." value="{{ $item->telpon }}">
                                <span class="text-danger" style="font-size: 15px;">*Format nomor sesuai WhatsAap anda!!! <br> contoh 6289685830987</span>

                                              </div>



                                <div class="row">
                                    <div class="form-floating mb-3 col-md-6">
                                        <label for="deskripsi">Deskripsi Toko</label>
                                        <textarea class="form-control" placeholder="Toko ini...." name="deskripsi" id="deskripsi" style="height: 100px">{{ $item->deskripsi }}</textarea>
                                    </div>

                                    <div class="form-floating mb-3 col-md-6">
                                        <label for="deskripsi">Alamat Toko</label>
                                        <textarea class="form-control" placeholder="Jl...." name="alamat_toko" id="deskripsi" style="height: 100px">{{ $item->alamat_toko }}</textarea>
                                    </div>
                                </div>

                                <hr class="mt-5 bg-success">
                                <div class="d-flex mt-5">
                                    <button type="button" data-toggle="modal" data-target="#simpan{{ $item->id  }}" class="btn btn-success col-md-3 mr-3">Simpan</button>
                                    <a type="button" data-toggle="modal" data-target="#batal" class="btn btn-danger col-md-3 text-white">Batal</a>
                                </div>

                                <!-- Modal simpan-->
                                <div class="modal fade" id="simpan{{ $item->id  }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama_toko }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin menyimpan perubahan??</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-success" >Iya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal batal-->
                                <div class="modal fade" id="batal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Kembali</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin kembali??</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                                <a href="{{route('tokosaya')}}" class="btn btn-success">Iya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>


      </div>

    </div>
  </div>
</div>
@endif
@endforeach

@endsection
