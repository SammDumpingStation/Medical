    <form action="/login" wire:submit="login" method="POST" class="w-[500px] bg-white p-8 rounded-2xl text-center">
        @csrf
        <div class="flex flex-col items-center">
            <img src="images/Nbsc_logo-removebg-preview.png" alt="Logo" class="logo">
            <h1 class="header-text">NBSC HOS</h1>
            <p class="mb-12">Please fill in your credentials to login.</p>
        </div>


        <div>
            <div class="form-group">
                <label>ID number</label>
                <input type="text" name="id_number" class="form-control rounded-lg" wire:model="id_number"
                    value="ID5809">
                @error('id_number')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control rounded-lg" wire:model="password"
                    value="">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary bg-[#004080] w-100 text-white">Login</button>
                {{-- <input type="submit" class="btn btn-primary w-100" value="Login"> --}}
            </div>
        </div>
    </form>
