

<div>

@if(Session::get('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif


      <form class="mt-4" method="post" wire:submit.prevent='ForgetHandler()'>

                                <div class="alert alert-success mt-4" role="alert">
                                    Enter your Email and instructions will be sent to you!
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="useremail">Email</label>
                                    <input type="email" class="form-control" id="useremail" placeholder="Enter email" wire:model='email'>
                                </div>
<span class="text-danger">@error('email')
    {{ $message }}
@enderror
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                    </div>
                                </div>

                                <div class="mt-2 mb-0 row">
                                    <div class="col-12 mt-3">
                                        <a href="{{ route('author.login') }}"> Login Here</a>
                                    </div>
                                </div>

                            </form>
</div>
