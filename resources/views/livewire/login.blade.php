<div class="w-full h-full">
   <div class="w-full flex h-full">
        <div class="w-[60%] md:flex hidden h-full bg-cyan-600">
            ....
        </div>
        <div class="flex-1 flex items-center justify-center">
            <form wire:submit.prevent="authenticate" class="flex flex-col w-full px-5">
                <label>Login</label>
                <input wire:model="form.email" class="border-2 mb-5 p-2 outline-none rounded-md border-gray-300" type="email" required>
                    @error('form.email') <span class="error">{{ $message }}</span> @enderror
                <label>Senha</label>
                <input wire:model="form.password" class="border-2 p-2 outline-none rounded-md border-gray-300" type="password" required>
                    @error('form.password') <span class="text-red-400">{{ $message }}</span> @enderror
                <button class="bg-cyan-500 mt-8 py-3 text-white rounded-md border-0">Entrar</button>
            </form>
        </div>
   </div>
</div>
