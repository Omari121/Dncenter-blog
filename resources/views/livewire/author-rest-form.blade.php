<div>

    @if(Session::get('fail'))
        <div class="alert alert-danger">
        {!! Session::get('fail')!!}
        </div>
    @endif


 @if(Session::get('success'))
        <div class="alert alert-danger">
        {!! Session::get('success')!!}
        </div>
    @endif



    
                          <form class="mt-4"  method="post" wire:submit.pervent='ResetHandler()'>

                                <div class="mb-3">
                                    <label class="form-label" for="username">Email </label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter email" wire:model='email'>
                                
                                        <span class="text-danger">  @error('email'){{ $message }}  @enderror</span>
                                  
                                </div>
    

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">New Password</label>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" wire:model='new_password'>
                                     <span class="text-danger">  @error('new_password'){{ $message }}  @enderror</span>
                                </div>

                                 <div class="mb-3">
                                    <label class="form-label" for="userpassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter  Confirm password" wire:model='confirm_new_password'>
                                    <span class="text-danger">  @error('confirm_new_password'){{ $message }}  @enderror</span>
                                </div>
    
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customControlInline">
                                            <label class="form-check-label" for="customControlInline">Back to Login</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset password</button>
                                    </div>
                                </div>

                               

                            </form>
</div>
