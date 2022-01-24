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

            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell mx-0 text-white"></i>
                        <span class="count"></span>
                    </a>
                    @include('layouts.notif', ['notif' => $notif])
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

	@if(session()->get('success'))
  	   <div class="alert alert-block col-md-3 float-right" data-dismiss="alert" data-aos="fade-up" data-aos-duration="1000" style="background: rgba(3, 121, 3, 0.582);">
      	      <button type="button" class="close" data-dismiss="alert" style="margin-top: -3px;"><i class="fa fa-times" aria-hidden="true"></i></button>
      	      <strong>Hore, {{ auth()->user()->username }}!!!</strong> {{ session()->get('success') }}.
  	   </div>
  	 @endif

  <div class="row container">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="mr-md-3 mr-xl-5">
            <h2>Profile Member </h2>
            <p class="mb-md-0">Berisi Profile Data Member.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


      <div class="row">
        <div class="col-lg-3 d-flex justify-content-center">
	  @if(auth()->user()->image_profile == '')
	  <img src="/assets/img/member/profile.png" alt="" class="rounded-circle m-auto"
          style="width: 200px; background-size: cover; background-repeat:no-repeat;
          background-position: center;
          height: 200px;
          box-shadow:  4px 4px 8px rgba(0,0,0,0.4);
          border: 1px solid grey;
          ">
	  @else
          <img src="{{ url('/profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="rounded-circle m-auto"
          style="width: 200px; background-size: cover; background-repeat:no-repeat;
          background-position: center;
          height: 200px;
          box-shadow:  4px 4px 8px rgba(0,0,0,0.4);
          border: 1px solid grey;
          ">
	  @endif
        </div>

        <div class="mt-3 col-lg-9">
          <div class="container bg-success py-5"
          style="border-radius: 10px;
          box-shadow:  3px 3px 4px rgba(0,0,0,0.4);
          border: 1px solid grey;
          ">
            <div class="container">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <div href="#" class="navbar-brand row pt-3 pb-3">
                    <div class="d-block" style="line-height: 2px;">
                      <h1 class="text-white mx-1" style="text-transform: capitalize; font-size: 30px;">{{ auth()->user()->username }}</h1>
                      <span class="text-white mx-1" style="font-size: 17px; font-weight: 400;">No Register: {{ auth()->user()->referal }}</span>
                    </div>
                  </div>

                  <style media="screen">
                    .btn-share{
                      font-size: 30px;
                      background: white;
                      border-radius: 50%;
                      width: 50px; height: 50px;
                      padding: 5px 8px 6px;
                      box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);
                      border: 1px solid grey;
                      cursor: pointer;
                      color: blue;
                      transition: 0.5s;
                    }

                    .btn-share:hover{
                      background: orange;
                      color: white;
                    }

                    .title,.desc{
                      color: #000;
                    }


                  </style>

                  <a href="whatsapp://send?text=http://boombest.net/?referal={{auth()->user()->referal}}" class="btn-share mt-3">
                    <i class="fas fa-share-alt"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-3 mb-5" style="margin-left: -20px;">
        <div class="container py-2">
          <div class="col-lg-12">

            <div class="">
              <div class="d-flex justify-content-between">
                <div class="mt-4 mx-2">
                  <span class="text-dark" style="font-size: 25px;">Detail Member</span>
                  <div class="d-flex">
                    <div class="bg-success" style="width: 55px; height: 5px;"></div>
                    <div class="bg-warning" style="width: 55px; height: 5px;"></div>
                    <div class="bg-danger" style="width: 55px; height: 5px;"></div>
                  </div>
                </div>
              </div>

              <div class="d-flex mt-4">
                <div class="col-5 title">
                  <span>NIK</span> :
                </div>
                <span class="desc">{{ auth()->user()->nik }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Nama</span> :
                </div>
                <span class="desc">{{ auth()->user()->name }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Kelamin</span> :
                </div>
                <span class="">{{ auth()->user()->jenis_kelamin }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Email</span> :
                </div>
                <span class="">{{ auth()->user()->email }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Whatsapp</span> :
                </div>
                <span class="desc">{{ auth()->user()->hp }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Telepon</span> :
                </div>
                <span class="desc">{{ auth()->user()->telp }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Alamat</span> :
                </div>
                <span class="desc">{{ auth()->user()->alamat }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Marketplace</span> :
                </div>
                <span class="desc">BOOMBEST.net</span>
              </div>
            </div>

            <div class="row">
              <div class="d-block col-lg-5">
                <div class="d-flex justify-content-between">
                  <div class="mt-4 mx-2">
                    <span class="text-dark" style="font-size: 25px;">Wilayah Asal</span>
                    <div class="d-flex">
                      <div class="bg-success" style="width: 48px; height: 5px;"></div>
                      <div class="bg-warning" style="width: 48px; height: 5px;"></div>
                      <div class="bg-danger" style="width: 48px; height: 5px;"></div>
                    </div>
                  </div>
                </div>

                <div class="d-flex mt-4">
                  <div class="col-5 title">
                    <span>Kota</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->kota }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Kecamatan</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->kecamatan }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Kabupaten</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->kabupaten }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Provinsi</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->provinsi }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Negara</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->negara }}</span>
                </div>
              </div>

              <div class="d-block col-lg-7 col-12">
                <div class="d-flex justify-content-between">
                  <div class="mt-4 mx-2">
                    <span class="text-dark" style="font-size: 25px;">Rekening</span>
                    <div class="d-flex">
                      <div class="bg-success" style="width: 35px; height: 5px;"></div>
                      <div class="bg-warning" style="width: 35px; height: 5px;"></div>
                      <div class="bg-danger" style="width: 35px; height: 5px;"></div>
                    </div>
                  </div>
                </div>

                <div class="d-flex mt-4">
                  <div class="col-5 title">
                    <span>Bank</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->bank }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Rekening</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->no_rek }}</span>
                </div>
              </div>
            </div>

            <div class="p-3 mt-3 float-right">
              <a type="button" data-toggle="modal" data-target="#edit{{ auth()->user()->id }}" class="btn btn-success text-white">Edit Profile</a>
            </div>
          </div>
        </div>
      </div>



      <div class="mb-5">
        <br>
      </div>

</div>

<!-- edit profile -->
<div class="modal fade" id="edit{{ auth()->user()->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Profile {{ auth()->user()->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/profile/updateprofile/{{auth()->user()->id}}" method="POST" enctype="multipart/form-data">

                <div class="d-flex">

                    <div>
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
                                <img src="{{ url('/profPicMember/'.auth()->user()->image_profile ) }}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                                <label class="btn-input">
                                    <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="image_profile" id="preview_gambar">
                                    <i class="fa fa-upload" aria-hidden="true"></i><br>
                                    Choise your <br>file img
                                </label>
                            </label>
                        </p>
                    </div>



                </div>


                <!--img upload--->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ auth()->user()->name }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{ auth()->user()->username }}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{ auth()->user()->email }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="hp" class="form-label">Whatsapp</label>
                        <input type="text" class="form-control" name="hp" id="hp" placeholder="hp" value="{{ auth()->user()->hp }}">
                    </div>

                    <div class="mb-3 col-md-6 d-none">
                        <label for="telp" class="form-label">Telpon</label>
                        <input type="text" class="form-control" name="telp" id="telp" placeholder="telp" value="{{ auth()->user()->telp }}">
                    </div>
                </div>



                <div class="mb-3 col-md-6">

                    <label for="password" class="form-label">Password</label><br>
                    <input type="hidden" name="password" value="{{ auth()->user()->password }}">
                    <a type="button" data-toggle="modal" data-target="#password{{ auth()->user()->id }}" data-dismiss="modal" class="btn btn-success text-white">Edit Password</a>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-3 d-none">
                        <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
                        <select type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control dropdown-toggle" value="{{auth()->user()->jenis_kelamin}}">
                            <option selected value="{{auth()->user()->jenis_kelamin}}" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{auth()->user()->jenis_kelamin}}</option>
                            <option value="Laki-laki" class="dropdown-item">Laki-laki</option>
                            <option value="Perempuan" class="dropdown-item">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-6 d-none">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="nik" value="{{ auth()->user()->nik }}">
                    </div>
                </div>

                <div class="mb-3 col-md-6 d-none">
                    <label for="referal" class="form-label">Kode Referal</label>
                    <input type="text" class="form-control" name="referal" id="referal" placeholder="referal" value="{{ auth()->user()->referal }}">
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" id="kota" placeholder="kota" value="{{ auth()->user()->kota }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="kecamatan" value="{{ auth()->user()->kecamatan }}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="kabupaten" class="form-label">Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="kabupaten" value="{{ auth()->user()->kabupaten }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="provinsi" value="{{ auth()->user()->provinsi }}">
                    </div>
                </div>

                <div class="mb-3 col-md-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" value="{{ auth()->user()->alamat }}">
                </div>

                <div class="mb-3 col-md-6 d-none">
                    <label for="negara" class="form-label">Negara</label>
                    <input type="text" class="form-control" name="negara" id="negara" placeholder="negara" value="{{ auth()->user()->negara }}">
                </div>

                <div class="mb-3 col-md-6 d-none">
                    <label for="point_total" class="form-label">Point Total</label>
                    <input type="text" class="form-control" name="point_total" id="point_total" placeholder="point_total" value="{{ auth()->user()->point_total }}">
                </div>

                <div class="mb-3 col-md-6 d-none">
                    <label for="point_tarik" class="form-label">Point Tarik</label>
                    <input type="text" class="form-control" name="point_tarik" id="point_tarik" placeholder="point_tarik" value="{{ auth()->user()->point_tarik }}">
                </div>

                <div class="mb-3 col-md-6 d-none">
                    <label for="point_sisa" class="form-label">Point Sisa</label>
                    <input type="text" class="form-control" name="point_sisa" id="point_sisa" placeholder="point_sisa" value="{{ auth()->user()->point_sisa }}">
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="bank" class="form-label">Bank</label>
                        <input type="text" class="form-control" name="bank" id="bank" placeholder="bank" value="{{ auth()->user()->bank }}" disabled>
                        <input type="hidden" class="form-control" name="bank" id="bank" placeholder="bank" value="{{ auth()->user()->bank }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="no_rek" class="form-label">No Rekening</label>
                        <input type="text" class="form-control" name="no_rek" id="no_rek" placeholder="no_rek" value="{{ auth()->user()->no_rek }}">
                    </div>
                </div>


                <div class="mb-3 col-md-6 d-none">
                    <label for="no_register" class="form-label">RegisterNoAktif</label>
                    <input type="text" class="form-control" name="no_register" id="no_register" placeholder="no_register" value="{{ auth()->user()->no_register }}">
                </div>



                <hr class="mt-5 bg-success">
                <div class="d-flex mt-5 justify-content-between">
                    <button type="button" data-dismiss="modal" class="btn btn-danger col-md-3 text-white">Batal</button>
                    <button type="submit" class="btn btn-success col-md-3 mr-3">Simpan</button>
                </div>

            </form>
        </div>
      </div>
    </div>
</div>
{{-- edit profile --}}

{{-- ubah password --}}
<div class="modal fade" id="password{{ auth()->user()->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Password {{ auth()->user()->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/ubahpassword" method="POST" enctype="multipart/form-data">
                @csrf


                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Password Lama</label>
                            <div class="d-flex">
    <input type="password" class="form-control" name="password_lama" id="password" placeholder="password">
    <div class="eye" onclick="myFunction()" style="margin-top: -20px;">
                   <span class="input-group-text mt-3 bg-transparent" style="height: 57px; position: absolute; margin-left: -55px; border: none;">
                  <svg id="openeye" style="display: none; fill: gray;" width="20px" height="20px" viewBox="0 0 98.48 98.48" style="enable-background:new 0 0 98.48 98.48;">
                        <path d="M97.204,45.788c-0.865-1.02-21.537-24.945-47.963-24.945c-26.427,0-47.098,23.925-47.965,24.946
                        c-1.701,2-1.701,4.902,0.001,6.904c0.866,1.02,21.537,24.944,47.964,24.944c26.426,0,47.098-23.926,47.964-24.946
                        C98.906,50.691,98.906,47.789,97.204,45.788z M57.313,35.215c1.777-0.97,4.255,0.143,5.534,2.485
                        c1.279,2.343,0.875,5.029-0.902,5.999c-1.776,0.971-4.255-0.143-5.535-2.485C55.132,38.871,55.535,36.185,57.313,35.215z
                        M49.241,68.969c-18.46,0-33.995-14.177-39.372-19.729c3.631-3.75,11.898-11.429,22.567-16.021
                        c-2.081,3.166-3.301,6.949-3.301,11.021c0,11.104,9.001,20.105,20.105,20.105s20.106-9.001,20.106-20.105
                        c0-4.072-1.219-7.855-3.3-11.021C76.715,37.812,84.981,45.49,88.612,49.24C83.235,54.795,67.7,68.969,49.241,68.969z"/>
                  </svg>

                  <svg id="slasheye" width="20px" height="20px" viewBox="0 0 98.48 98.481" style="enable-background:new 0 0 98.48 98.481; fill: gray;">
                        <path d="M69.322,44.716L49.715,64.323C60.438,64.072,69.071,55.438,69.322,44.716z"/>
                        <path d="M97.204,45.789c-0.449-0.529-6.245-7.23-15.402-13.554l-6.2,6.2c5.99,3.954,10.559,8.275,13.011,10.806
                        C83.235,54.795,67.7,68.969,49.241,68.969c-1.334,0-2.651-0.082-3.952-0.222l-7.439,7.438c3.639,0.91,7.449,1.451,11.391,1.451
                        c26.426,0,47.098-23.927,47.964-24.946C98.906,50.692,98.906,47.79,97.204,45.789z"/>
                        <path d="M90.651,15.901c0-0.266-0.104-0.52-0.293-0.707l-7.071-7.07c-0.391-0.391-1.022-0.391-1.414,0L66.045,23.952
                        c-5.202-1.893-10.855-3.108-16.804-3.108c-26.427,0-47.098,23.926-47.965,24.946c-1.701,2-1.701,4.902,0.001,6.903
                        c0.517,0.606,8.083,9.354,19.707,16.319l-12.86,12.86c-0.188,0.188-0.293,0.441-0.293,0.707c0,0.267,0.105,0.521,0.293,0.707
                        l7.071,7.07c0.195,0.194,0.451,0.293,0.707,0.293c0.256,0,0.512-0.099,0.707-0.293l73.75-73.75
                        C90.546,16.421,90.651,16.167,90.651,15.901z M9.869,49.241C13.5,45.49,21.767,37.812,32.436,33.22
                        c-2.081,3.166-3.301,6.949-3.301,11.021c0,4.665,1.601,8.945,4.27,12.352l-6.124,6.123C19.129,58.196,12.89,52.361,9.869,49.241z"/>
                  </svg>
                  </span>
               </div>

    </div>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Password Baru</label>
                            <div class="d-flex">
    <input type="password" class="form-control" name="password" id="passwordnew" placeholder="password baru">
    <div class="eye" onclick="myFunction1()" style="margin-top: -20px;">
                   <span class="input-group-text mt-3 bg-transparent" style="height: 57px; position: absolute; margin-left: -55px; border: none;">
                  <svg id="openeye1" style="display: none; fill: gray;" width="20px" height="20px" viewBox="0 0 98.48 98.48" style="enable-background:new 0 0 98.48 98.48;">
                        <path d="M97.204,45.788c-0.865-1.02-21.537-24.945-47.963-24.945c-26.427,0-47.098,23.925-47.965,24.946
                        c-1.701,2-1.701,4.902,0.001,6.904c0.866,1.02,21.537,24.944,47.964,24.944c26.426,0,47.098-23.926,47.964-24.946
                        C98.906,50.691,98.906,47.789,97.204,45.788z M57.313,35.215c1.777-0.97,4.255,0.143,5.534,2.485
                        c1.279,2.343,0.875,5.029-0.902,5.999c-1.776,0.971-4.255-0.143-5.535-2.485C55.132,38.871,55.535,36.185,57.313,35.215z
                        M49.241,68.969c-18.46,0-33.995-14.177-39.372-19.729c3.631-3.75,11.898-11.429,22.567-16.021
                        c-2.081,3.166-3.301,6.949-3.301,11.021c0,11.104,9.001,20.105,20.105,20.105s20.106-9.001,20.106-20.105
                        c0-4.072-1.219-7.855-3.3-11.021C76.715,37.812,84.981,45.49,88.612,49.24C83.235,54.795,67.7,68.969,49.241,68.969z"/>
                  </svg>

                  <svg id="slasheye1" width="20px" height="20px" viewBox="0 0 98.48 98.481" style="enable-background:new 0 0 98.48 98.481; fill: gray;">
                        <path d="M69.322,44.716L49.715,64.323C60.438,64.072,69.071,55.438,69.322,44.716z"/>
                        <path d="M97.204,45.789c-0.449-0.529-6.245-7.23-15.402-13.554l-6.2,6.2c5.99,3.954,10.559,8.275,13.011,10.806
                        C83.235,54.795,67.7,68.969,49.241,68.969c-1.334,0-2.651-0.082-3.952-0.222l-7.439,7.438c3.639,0.91,7.449,1.451,11.391,1.451
                        c26.426,0,47.098-23.927,47.964-24.946C98.906,50.692,98.906,47.79,97.204,45.789z"/>
                        <path d="M90.651,15.901c0-0.266-0.104-0.52-0.293-0.707l-7.071-7.07c-0.391-0.391-1.022-0.391-1.414,0L66.045,23.952
                        c-5.202-1.893-10.855-3.108-16.804-3.108c-26.427,0-47.098,23.926-47.965,24.946c-1.701,2-1.701,4.902,0.001,6.903
                        c0.517,0.606,8.083,9.354,19.707,16.319l-12.86,12.86c-0.188,0.188-0.293,0.441-0.293,0.707c0,0.267,0.105,0.521,0.293,0.707
                        l7.071,7.07c0.195,0.194,0.451,0.293,0.707,0.293c0.256,0,0.512-0.099,0.707-0.293l73.75-73.75
                        C90.546,16.421,90.651,16.167,90.651,15.901z M9.869,49.241C13.5,45.49,21.767,37.812,32.436,33.22
                        c-2.081,3.166-3.301,6.949-3.301,11.021c0,4.665,1.601,8.945,4.27,12.352l-6.124,6.123C19.129,58.196,12.89,52.361,9.869,49.241z"/>
                  </svg>
                  </span>
                </div>
    </div>
                        </div>
                    </div>



                  <hr class="mt-5 bg-success">
                  <div class="d-flex mt-5 justify-content-between">
                      <button type="button" data-toggle="modal" data-target="#simpan" class="btn btn-success col-md-3 mr-3">Simpan</button>
                      <a type="button" data-toggle="modal" data-target="#edit{{ auth()->user()->id }}" data-dismiss="modal" class="btn btn-danger col-md-3 text-white">Batal</a>
                  </div>
            </form>
        </div>
      </div>
    </div>
</div>
{{-- ubah password --}}

<script>
    function myFunction() {
        var x = document.getElementById("password");
        var y = document.getElementById("openeye");
        var z = document.getElementById("slasheye");

        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>

<script>

    function myFunction1() {
        var x = document.getElementById("passwordnew");
        var y = document.getElementById("openeye1");
        var z = document.getElementById("slasheye1");

        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }

</script>
@endsection
