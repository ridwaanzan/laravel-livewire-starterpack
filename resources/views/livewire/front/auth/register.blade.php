<div class="row justify-content-center">

    <div class="col-xl-5 col-lg-5 col-md-6">
        <div class="align-item-center">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    @error('generals.error')
                                        <p class="mb-4 text-center text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="user">
                                    <div class="form-group">
                                        <input
                                            type="name"
                                            wire:model.defer="name"
                                            class="form-control form-control-user"
                                            id="exampleInputName"
                                            aria-describedby="nameHelp"
                                            placeholder="Enter Full Name...">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="email"
                                            wire:model.defer="email"
                                            class="form-control form-control-user"
                                            id="exampleInputEmail"
                                            aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <select
                                            wire:model.defer="provinsi"
                                            class="form-control form-control-user">
                                            <option value="provinsi">Pilih Provinsi</option>
                                            @foreach ($provinces as $prov)
                                                <option value="{{$prov->id}}">{{$prov->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select
                                            wire:model="regency"
                                            class="form-control form-control-user">
                                            <option value="kecamatan">Pilih Kecamatan</option>
                                            @foreach ($regencies as $regen)
                                                <option value="{{$regen->id}}">{{$regen->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select
                                            wire:model.defer="district"
                                            class="form-control form-control-user">
                                            <option value="kelurahan">Pilih Kelurahan</option>
                                            @foreach ($districts as $distr)
                                                <option value="{{$distr->id}}">{{$distr->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type=""
                                            wire:model.defer="name"
                                            class="form-control form-control-user"
                                            id="exampleInputName"
                                            aria-describedby="nameHelp"
                                            placeholder="Enter Full Name...">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="password"
                                            wire:model.defer="password"
                                            class="form-control form-control-user"
                                            id="exampleInputPassword"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="password_confirmation"
                                            wire:model.defer="password_confirmation"
                                            class="form-control form-control-user"
                                            id="exampleInputPassword"
                                            placeholder="Password Confirmation">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button
                                        wire:click="login"
                                        wire:loading.attr="disabled"
                                        class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <button class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </button>
                                    <button class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </button>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
