<div>

    @if(Session::get('fail'))
        <div class="alert alert-danger">
        {{ Session::get('fail') }}
        </div>
    @endif


      <form class="mt-4" wire:submit.prevent="loginHandler()" method="post">

                                <div class="mb-3">
                                    <label class="form-label" for="username">Email or Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter email or username" wire:model="login_id">
                                    @error('login_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" wire:model="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customControlInline">
                                            <label class="form-check-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                                <div class="mb-3 mt-2 mb-0 row">
                                    <div class="col-12 mt-3">
                                        <a href="{{ route('author.forget-password') }}"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                </div>

                            </form>

</div>
