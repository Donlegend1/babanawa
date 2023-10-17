<div>
     <div class="form-row mt-50">
            <div class="form-group col-md-6">
                <label for="exampleInputName1"><i class="ti-user"></i> School</label>
                <input wire:model="name" type="text" class="form-control" id="exampleInputName1">
                 @error('name') <span>{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1"><i class="ti-email"></i> Email address</label>
                <input type="email" wire:model="email" class="form-control" id="exampleInputEmail1">
                 @error('email') <span>{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="exampleInputPassword1"><i class="ti-lock"></i> Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputPassword2"><i class="ti-lock"></i> Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
        </div>


    <button wire:click="nextStep">Next</button>
</div>
