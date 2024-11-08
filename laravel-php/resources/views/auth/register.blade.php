<x-layout>
    <x-slot:heading>
        Sign up
    </x-slot:heading>
    
    <form method="POST" action="/jobs">
        @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Register</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Sign up to have full access to all features</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for='first_name'>First Name</x-form-label>
            <div class="mt-2">
              <x-form-imput name="first_name" id="first_name" placeholder="Perico" />
              <x-form-error name="first_name" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for='last_name'>Last Name</x-form-label>
            <div class="mt-2">
              <x-form-imput name="last_name" id="last_name" placeholder="Periquito" />
              <x-form-error name="last_name" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for='email'>Email</x-form-label>
            <div class="mt-2">
              <x-form-imput name="email" id="email" placeholder="pericoquito@gmail.com" />
              <x-form-error name="email" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for='email'>Email</x-form-label>
            <div class="mt-2">
              <x-form-imput name="email" id="email" placeholder="pericoelcrack@gmail.com" />
              <x-form-error name="email" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for='email'>Email</x-form-label>
            <div class="mt-2">
              <x-form-imput name="email" id="email" placeholder="pericoelcrack@gmail.com" />
              <x-form-error name="email" />
            </div>
          </x-form-field>
        </div>
        {{-- @if($errors->any())
        <ul>
          @foreach($errors->all as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
        @endif --}}
      </div>
        </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <x-form-button>Save</x-form-button>
    </div>
  </form>  

</x-layout>