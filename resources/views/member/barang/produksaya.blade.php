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
                    <form action="{{ url("/searchmybarang") }}" method="GET" class="search cari">
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

          <section class="products-grid mt-2">
            <div class="container">
                  <div class="row">
                    <div class="row container">
                      <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                          <div class="d-flex align-items-end flex-wrap">
                            <div class="mr-md-3 mr-xl-5">
                              <h2>Halaman Produk Anda </h2>
                              <p class="mb-md-0">Berisi Berbagai Produk Anda.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="col-lg-12 col-md-12 col-sm-12 p-0">
			  @if(session()->get('success'))
  	   		  <div class="alert alert-block" data-dismiss="alert" data-aos="fade-up" data-aos-duration="1000" style="background: rgba(3, 121, 3, 0.582);">
      	      			<button type="button" class="close" data-dismiss="alert" style="margin-top: -3px;"><i class="fa fa-times" aria-hidden="true"></i></button>
      	     			<strong>Hore, {{ auth()->user()->username }}!!!</strong> {{ session()->get('success') }}.
  	   		  </div>
  	 		  @endif

                          @if(session()->get('deleted'))
                          <div class="alert alert-block fade show" data-aos="fade-up" data-aos-duration="1000" style="background: rgba(255, 0, 0, 0.493);">
                            <button type="button" class="close" data-dismiss="alert" style="margin-top: -3px;"><i class="fa fa-times" aria-hidden="true"></i></button>
                            <strong>Hore, {{ auth()->user()->username }}!!!</strong> {{ session()->get('deleted') }}.
                          </div>
                          @endif

                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="products-top bg-success">
                                      <div class="products-top-inner">
                                          <div class="products-found">
                                              <p><span class="text-white">Semua Produk</span></p>
                                          </div>
                                          <div class="products-sort">
                                              <br>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>


                          <form action="/produksaya/add">

                              @csrf
                              <button class="btn btn-success" type="button" data-toggle="modal" data-target="#tambah">Tambah Produk <i class="mdi mdi-archive menu-icon" aria-hidden="true"></i></button>

                          </form>


                        <div class="row mt-3">
                          <!--produk-->
                          @foreach($barang as $item)
                          @if($item->id_member == auth()->user()->id)
                          <div class="col-xl-3 col-lg-4 col-md-4 col-6 p-1">
                            <a type="button" data-toggle="modal" data-target="#detail{{ $item->id }}">
                              <div class="single-product bg-white">
                                  <div class="product-img m-1">
                                      <a type="button" data-toggle="modal" data-target="#detail{{ $item->id }}">
                                          <img src="{{ url('products/'. $item->img_barang) }}" class="img-fluid"
                                          style="background-size: cover; background-position: center;">
                                      </a>
                                  </div>
                                  <div class="product-content">
                                      <h3 class="text-truncate"><a href="/produksaya/detail/{{ $item->id }}">{{ $item->nama_barang }}</a></h3>
                                  </div>

                                  <div class="d-flex mt-auto justify-content-end mb-4 mr-2 ">
                                    {{-- <a href="/produksaya/edit/{{ $item->id }}" class="btn btn-warning p-2 mr-2">Edit</a> --}}
                                    <a class="btn btn-warning p-2 mr-2" type="button" data-toggle="modal" data-target="#edit{{ $item->id }}">Edit</a>
                                    <button type="button" class="btn btn-danger p-2" data-toggle="modal" data-target="#delete{{ $item->id }}">
                                        Hapus
                                    </button>
                                  </div>

                              </div>
                            </a>
                          </div>
                          <!--end produk-->
                          @endif

			  @endforeach
                      </div>
                  </div>
                </div>
             </div>
          </section>


  <div class="pt-5"></div>
  <div class="pt-5"></div>
  <div class="pt-2"></div>
  {{-- hapus produk member --}}
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
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
          <a href="/produksaya/delete/{{ $item->id }}" class="btn btn-danger">Ya</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  {{-- hapus produk member --}}

  {{-- edit produk member --}}
  @foreach ($barang as $item)
  <div class="modal fade" id="edit{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama_barang }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/produksaya/update/{{$item->id}}" method="POST" enctype="multipart/form-data">

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
                        <img src="{{ url('products/'. $item->img_barang) }}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                        <label class="btn-input">
                            <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_barang" id="preview_gambar">
                            <i class="fa fa-upload" aria-hidden="true"></i><br>
                            Choise your <br>file img
                        </label>
                    </label>
                </p>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--img upload--->


                <div class="d-flex">
                    <div class="mb-3 col-md-6">
                        <label for="namabarang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" id="namabarang" placeholder="Nama barang" value="{{ $item->nama_barang }}">
                    </div>

                    <div class="mb-3 col-md-4">
                        <label for="hargabarang" class="form-label">Harga Barang</label>
                        <input type="text" class="form-control" name="harga" id="hargabarang" placeholder="Rp:..." value="{{ $item->harga }}">
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-3">
                        <label for="namabarang" class="form-label">Kondisi</label>
                        <select type="text" id="kondisi" name="kondisi" class="form-control dropdown-toggle">
                            <option selected value="{{$item->kondisi}}" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{$item->kondisi}}</option>
                            <option value="Baru" class="dropdown-item">Baru</option>
                            <option value="Bekas" class="dropdown-item">Bekas</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label for="namabarang" class="form-label">Berat Barang</label>
                        <input type="text" class="form-control" name="berat" id="berat" placeholder="...Gram/Kg" value="{{ $item->berat }}">
                    </div>

                    <div class="mb-3 col-md-3">
                        <label for="namabarang" class="form-label">Kategori</label>
                        <select type="text" name="kategori" class="form-control dropdown-toggle" >
                            <option selected value="{{$item->kategori}}" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{ $item->kategori }}</option>
                            @foreach($inputkategori as $kategori)
                                <option value="{{$kategori->kategori}}" class="dropdown-item">{{$kategori->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label for="daerah" class="form-label">Wilayah</label>
                        <select type="text" name="daerah" class="form-control dropdown-toggle" >
                            <option selected value="{{$item->daerah}}" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{ $item->daerah }}</option>
                            @foreach($inputwilayah as $kategori)
                                <option value="{{$kategori->daerah}}" class="dropdown-item">{{$kategori->nama_daerah}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>


                <div class="d-flex">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="floatingTextarea2">Spesifikasi</label>
                        <textarea class="form-control" placeholder="Spesifikasi produk anda" name="spesifikasi" id="floatingTextarea2" style="height: 100px">{{ $item->spesifikasi }}</textarea>
                    </div>

                    <div class="form-floating mb-3 col-md-6">
                        <label for="floatingTextarea2">Keunggulan</label>
                        <textarea class="form-control" placeholder="Keunggulan produk anda" name="keunggulan" id="floatingTextarea2" style="height: 100px">{{ $item->keunggulan }}</textarea>
                    </div>

                </div>

                <div class="d-flex">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="floatingTextarea2">Ketentuan Garansi</label>
                        <textarea class="form-control" placeholder="Ketentuan Garansi produk anda" name="garansi" id="floatingTextarea2" style="height: 100px">{{ $item->garansi }}</textarea>
                    </div>

                    <div class="form-floating mb-3 col-md-6">
                        <label for="floatingTextarea2">Deskripsi Lainnya</label>
                        <textarea class="form-control" placeholder="Deskripsi Lain dari produk anda" name="lainnya" id="floatingTextarea2" style="height: 100px">{{ $item->lainnya }}</textarea>
                    </div>
                </div>

                <hr class="mt-5 bg-success">
                <div class="d-flex mt-5 justify-content-between">
                    <a type="button" data-dismiss="modal" class="btn btn-danger col-md-3 text-white">Batal</a>
                    <button type="button" data-toggle="modal"   data-target="#simpan{{ $item->id  }}" class="btn btn-success col-md-3 mr-3">Simpan</button>
                </div>

                <!-- Modal simpan-->
                <div class="modal fade" id="simpan{{ $item->id  }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama_barang }}</h5>
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


            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  {{-- tambah produk member --}}
  <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Produk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/produksaya/insert" method="POST" enctype="multipart/form-data">
                @csrf
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
                         <img src="/assets/img/kategori.png {{-- url('products/'. $barang->img_barang) --}}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                         <label class="btn-input">
                             <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_barang" id="preview_gambar" required>
                             <i class="fa fa-upload" aria-hidden="true"></i><br>
                             Choise your <br>file img
                         </label>
                     </label>
                 </p>
                 <!--img upload--->


                <div class="mb-3 col-md-6 d-none">
                  <label for="id_member" class="form-label">ID Member</label>
                  <input type="hidden" class="form-control" name="id_member" id="id_member" placeholder="ID Member" value="{{ auth()->user()->id }}" required >
                </div>


                <div class="d-flex">
                    <div class="mb-3 col-md-6">
                        <label for="namabarang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" id="namabarang" placeholder="Nama barang" required>
                      </div>


                      <div class="mb-3 col-md-4">
                        <label for="hargabarang" class="form-label">Harga Barang</label>
                        <input type="number" class="form-control mb-2" name="harga" id="hargabarang" placeholder="Rp:..." required>
                      <span class="text-danger" style="font-size: 15px;">*Format harga harus angka!!!</span>
                      </div>
                </div>

                <div class="d-flex">
                    <div class="mb-3 col-md-3">
                        <label for="namabarang" class="form-label">Kondisi</label>
                        <select type="text" id="kondisi" name="kondisi" class="form-control dropdown-toggle" value="">
                            <option selected disabled value=" " class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Kondisi</option>
                            <option value="Baru" class="dropdown-item">Baru</option>
                            <option value="Bekas" class="dropdown-item">Bekas</option>
                        </select>
                      </div>

                      <div class="mb-3 col-md-3">
                        <label for="namabarang" class="form-label">Berat Barang</label>
                        <input type="text" class="form-control" name="berat" id="berat" placeholder="...Gram/Kg">
                          <div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="berat" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                      </div>

                      <div class="mb-3 col-md-3">
                        <label for="namabarang" class="form-label">Kategori</label>
                        <select type="text" name="kategori" class="form-control dropdown-toggle" value="" required>
                            <option selected disabled value=" " class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Kategori</option>
                            @foreach($inputkategori as $kategori)
                            <option value="{{$kategori->kategori}}" class="dropdown-item">{{$kategori->nama}}</option>
                            @endforeach
                        </select>
                      </div>

                          <div class="mb-3 col-md-3">
                              <label for="daerah" class="form-label">Wilayah</label>
                              <select type="text" name="daerah" class="form-control dropdown-toggle" required>
                                  <option selected disabled value=" " class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Pilih Wilayah!</option>
                                  @foreach($inputwilayah as $kategori)
                                      <option value="{{$kategori->daerah}}" class="dropdown-item">{{$kategori->nama_daerah}}</option>
                                  @endforeach
                              </select>
                          </div>
                </div>

                <div class="d-flex">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="floatingTextarea2">Spesifikasi</label>
                        <textarea class="form-control" placeholder="Spesifikasi produk anda" name="spesifikasi" id="floatingTextarea2" style="height: 100px"></textarea>
                        <div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="spesifikasi" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                      </div>

                      <div class="form-floating mb-3 col-md-6">
                        <label for="floatingTextarea2">Keunggulan</label>
                        <textarea class="form-control" placeholder="Keunggulan produk anda" name="keunggulan" id="floatingTextarea2" style="height: 100px"></textarea>
                        <div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="keunggulan" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                      </div>
                </div>

                <div class="d-flex">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="floatingTextarea2">Ketentuan Garansi</label>
                        <textarea class="form-control" placeholder="Ketentuan Garansi produk anda" name="garansi" id="floatingTextarea2" style="height: 100px"></textarea>
                        <div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="garansi" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                      </div>

                      <div class="form-floating mb-3 col-md-6">
                        <label for="floatingTextarea2">Deskripsi Lainnya</label>
                        <textarea class="form-control" placeholder="Deskripsi Lain dari produk anda" name="lainnya" id="floatingTextarea2" style="height: 100px"></textarea>
                        <div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="lainnya" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                      </div>
                </div>

               <hr class="mt-5 bg-success">
                <div class="d-flex mt-5">
                  <button type="button" class="btn btn-success col-md-3 mr-3" data-toggle="modal" data-target="#simpan">Simpan</button>
                  <a type="button" class="btn btn-danger col-md-3 text-white" class="btn btn-primary" data-dismiss="modal">Batal</a>
                </div>

                <!--pop up simpan-->
                <div class="modal fade" id="simpan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Yakin Ingin Menambahkan Barang Ini?</p>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!--pop up simpan-->

              </form>
        </div>
      </div>
    </div>
  </div>
  {{-- tambah produk member --}}


@endsection
