<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Task
        </h2>
    </x-slot>

    <x-container class="py-12">
        <form action="{{route('tasks.update',$task)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-6">
                        <x-input-label>
                            Nombre
                        </x-input-label>
                        <x-text-input name='name' value="{{ old('name',$task->name) }}" type='text' class="w-full mt-2"
                            placeholder='Ingrese el Nombre' />
                        {{-- Mostrar el error                      --}}
                        <x-input-error :messages="$errors->first('name')" />
                    </div>
    
                    <div class="mb-6">
                        <x-input-label>
                            Descripcion
                        </x-input-label>
    
                        <textarea name="description" class="form-control w-full mt-2" id="" cols="2" rows="2">{{old('description',$task->description)}}</textarea>
                        <x-input-error :messages="$errors->first('description')" />
                    </div>
    
                    <div class="mb-6"">
                        <x-input-label>
                            Imagene
                        </x-input-label>
                        <input type="file" name="image_url" class="mt-2">
                        <x-input-error :messages="$errors->first('image_url')" />
                    </div>
                    <div class="flex justify-end">
                        
                        <button class="btn btn-blue">
                            Actualizar
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </x-container>
    
</x-tenancy-layout>