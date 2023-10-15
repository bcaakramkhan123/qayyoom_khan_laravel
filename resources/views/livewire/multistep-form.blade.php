<form id="myForm" wire:submit.prevent="register">
<div id="step-1" class="clientFrom step p-0 {{$current_step == 1 ? 'd-block' : 'd-none'}}" data-id='1'>
    <div class="text-center pt-5">
    <img src="images/register-assets/mocal-logo.svg" />
    </div>
    <div class="modal-px-60 pt-5">
    <input
        type="email"
        placeholder="Enter Email Address"
        class="input-style input-font-bold"
        name="email"
        wire:model.defer="email"
    />
    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
    <div class="d-flex mt-4">
        <div class="ui fluid search selection dropdown input-font-bold" id="country">
        <input type="text" name="country_code" id="country_code" wire:model.defer="country_code"/>
        <i class="dropdown icon"></i>
        @if(empty($country_code))
        <div class="default text">Select Country</div>
        @else 
        <div class="text"><i class="{{$country_code}} flag"></i>{{@$countries[$country_code]}}</div>
        @endif
        <div class="menu">
            @foreach($countries as $key => $row)
            <div class="item" onclick="@this.country_code = '{{$key}}';" data-value="{{$key}}">
            <i class="{{$key}} flag"></i>{{$row}}
            </div>
            @endforeach 
        </div>
        </div>
        

        <input
        type="tel"
        placeholder="Enter Phone Number"
        class="input-style input-font-bold ps-3"
        name="mobile"
        wire:model.defer="mobile"
        />
        
    </div>
    <div class="d-flex mt-4">
    <p><span class="text-danger">@error('country_code'){{ $message }}@enderror</span>
    <span class="text-danger">@error('mobile'){{ $message }}@enderror</span></p>
    
    </div>

    <div class="text-center">
        <button
        type="button"
        class="btn-purple-fill btn-width-sm mt-5 nextScreen next"
        wire:click="incrementStep"
        >
        Get Started
        </button>
        <div class="or"></div>
        <a class="btn-gray-border signupbtn mb-3">
        <img src="images/register-assets/ic-google.svg" /> Sign Up with Google
        </a><br />

        <a class="btn-gray-border signupbtn mb-3">
        <img src="images/register-assets/ic-microsoft.svg" /> Sign Up with Microsoft
        </a><br />

        <p class="mt-4 mb-5">
        Already have an account?
        <a class="anchor-blue text-decoration"
            >Log in</a
        >
        </p>
    </div>
    </div>
</div>


<div id="step-2" class="clientFrom step p-0 Hideborder {{$current_step == 2 ? 'd-block' : 'd-none'}}" data-id='2'>
    <div class="modal-content radius24">
    <div class="pt-5">
        <div class="text-center border-btm">
        <img src="images/signin-assets/mocal-logo.svg" class="logo-sm" />
        </div>

        <div class="modal-body pt-4 modal-px-60">
        <div class="mb-4">
            <div class="row">
            <div class="col-lg-12">

                <div class="form-check d-inline-block me-3 ps-0 ms-0">                           
                <label for="individual">Company Details</label>
                </div>                         
            </div>
            </div>
        </div>

        <div class="mb-5">
            <textarea col="20" id="company" wire:model.defer="company"></textarea>
        </div>  
        <span class="text-danger">@error('company'){{ $message }}@enderror</span>                                     
        </div>
        <div class="text-center mt-5 pt-5 mb-5">
        <button type="button" class="btn btn-white-fill prevScreen prev" wire:click="decrementStep">< Back</button>
        <button type="button" class="btn btn-purple-fill nextScreen next" wire:click="incrementStep"> Next </button>
        </div>
    </div>
    </div>
</div>

<div id="step-3" class="clientFrom step p-0 Hideborder {{$current_step == 3 ? 'd-block' : 'd-none'}}" data-id='3'>
    <div class="modal-content radius24">
    <div class="pt-5">

        <div class="text-center border-btm">
        <img src="images/signin-assets/mocal-logo.svg" class="logo-sm" />
        </div>

        <div class="modal-body pt-5 modal-px-60">
        <div class="mb-4">
            <div class="row">
            <div class="col-lg-12">                                                
                <div class="inputfiles">
                <div class="fileUploadWrap">
                    <div>
                        @if(!empty($profile_pic))
                        <img width="200" height="200" src="{{ $profile_pic->temporaryUrl() }}"
                            alt="" class="DropIcon" />
                        @else 
                        <img src="images/register-assets/upload-files.png"
                        alt="" class="DropIcon" />
                        @endif
                        <input type="file" name="import_file" wire:model.defer="profile_pic">
                    </div>
                    <div class="parawrap">
                        <p class="fileNames">File Chosen : No File Chosen </p>
                        <p class="fileName">Profile Picture </p>                                    
                    </div>
                    
                </div>
                <span class="text-danger">@error('profile_pic'){{ $message }}@enderror</span>   
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="text-center mb-5">
        <button type="button" class="btn btn-white-fill prevScreen prev" wire:click="decrementStep">< Back</button>
        <button type="button" class="btn btn-purple-fill nextScreen next" wire:click="incrementStep">
            Proceed
        </button>
        </div>  
    </div>
    </div>
</div>

<div id="step-4" class="clientFrom step p-0 Hideborder {{$current_step == 4 ? 'd-block' : 'd-none'}}" data-id='4'>
    <div class="modal-content radius24">
    <div class="pt-5">

        <div class="text-center border-btm">
        <img src="images/signin-assets/mocal-logo.svg" class="logo-sm" />
        </div>

        <div class="modal-body pt-5 modal-px-60">
        <div class="mb-4">
            <div class="row">
            <div class="col-lg-12">   
            <h2 class="border text-center">Summary</h2>                                           
                <div class="inputfiles">
                <div class="fileUploadWrap">
                    <div>
                        @if(!empty($profile_pic))
                        <img width="200" height="200" src="{{ $profile_pic->temporaryUrl() }}"
                            alt="" class="DropIcon" />
                        @else 
                        <img src="images/register-assets/upload-files.png"
                            alt="" class="DropIcon" />
                        @endif
                    </div>
                    <div class="parawrap">
                        <p class="fileName">Email: {{$email}} </p> 
                        <p class="fileName">Country: {{@$countries[$country_code]}} </p>                                   
                        <p class="fileName">Mobile: {{$mobile}} </p>
                    </div>
                </div>
                <div class="parawrap">
                    <p class="fileName">Company: </p> 
                    <p class="fileName">{!!$company!!} </p> 
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="text-center mb-5">
        <button type="button" class="btn btn-white-fill prevScreen prev" wire:click="decrementStep">< Back</button>
        <button type="submit" class="btn btn-purple-fill nextScreen next" wire:click="incrementStep">
            Submit
        </button>
        </div>  
    </div>
    </div>
</div>

</form>

@push('scripts')
<script>
Livewire.on('initEditor', () => {
    tinymce.init({
        selector: '#company',
        forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
            console.log(editor.getContent())
            @this.set('company', editor.getContent());
            });
        }
    });
});

  </script>
@endpush