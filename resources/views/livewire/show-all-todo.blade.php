@foreach ($todos as $todo)
    <div>
        <ul class="my-4 ">
            <li class=" mt-4" id="1">
                <div class="flex gap-3">
                    <div class="w-9/12 h-35 bg-[#e0ebff] rounded-[7px] flex justify-between items-center px-3">
                        <div class="justify-center">
                            <div class="flex flex-nowrap">
                                <div class="form-control">
                                    <label class="cursor-pointer label">
                                        <input type="text" wire:model="todo_id" value="{{ $todo->id }}" hidden />
                                        <input type="checkbox" wire:model="isactive" value="{{ $todo->id }}"
                                            style="" class="checkbox checkbox-success  " />
                                    </label>
                                    {{-- {{ var_export($isactive)}} --}}
                                </div>
                                <div class="flex flex-col">
                                    <div>
                                        <h3>
                                            <strike id="strike1"
                                                class="flex-none strike_none text-sm ml-4 text-[#009700] font-semibold">
                                                {{ $todo->title }}</strike>
                                        </h3>
                                    </div>
                                    <div>
                                        <h6>
                                            <strike id="strike1"
                                                class="flex-none strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">
                                                {{ $todo->description }}</strike>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            @if (Request::segment(1) !== 'important')
                                <button wire:click.prevent="edit({{ $todo->id }})"
                                    class="" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight">

                                    <svg class="h-8 w-8 text-blue-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
                                </button>

                                <button wire:click="delete({{ $todo->id }})" type="button">
                                    <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7" x2="20" y2="7" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" />  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </button>
                            @endif
                            <input type="checkbox" class="toggle toggle-error" value="{{ $todo->id }}" wire:click='isimportant({{$todo->id}})' x-model="isimportant"  {{ $todo->isimportant == 1 ? 'checked' : '' }}>
                        </div>
                    </div>
                    </button>
                </div>
            </li>
        </ul>
    </div>
@endforeach
