@extends('layouts.frontend')


@section('content')
          <main class="my-8">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      {{-- @if ($message = Session::get('success')) --}}
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              {{-- <p class="text-green-800">{{ $message }}</p> --}}
                          </div>
                      {{-- @endif --}}
                        <h3 class="text-3xl text-bold">Cart List</h3>
                      <div class="flex-1">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Name</th>
                              <th class="text-left">Size</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Quantity</span>
                              </th>
                              <th class="hidden text-right md:table-cell"> price</th>
                              <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>


                          <tbody>

                              @foreach ($cartItems as $item)
                              @if (Auth::user()->id==$item->user_id)

                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{ $item->image }}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $item->name }}</p>

                                </a>
                              </td>

                              <td>
                                  <p class="mb-2 md:ml-4">{{ $item->cartSize}}</p>
                              </td>

                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">

                                    <form action="{{ route('cart.update') }}" method="post">
                                          @csrf
                                  <input type="hidden" name="id" value="{{ $item->products_id }}" >
                                    <input type="number" name="quantity" value="{{ $item->quantity }}"
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                                    </form>
                                  </div>
                                </div>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    ${{ $item->price }}
                                </span>
                              </td>

                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove', ['id'=>$item->products_id])}}" method="get">
                                  @csrf
                                  <input type="hidden" value="" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600">x</button>
                              </form>

                              </td>
                            </tr>

                             @endif
                            @endforeach

                          </tbody>
                        </table>
                        <div>
                            Total: {{$settings}}

                            {{-- @foreach ($getTotalPrices as $getTotalPrice)
                            Total: $ {{$getTotalPrice->getTotalPrice}}
                            @endforeach --}}
                            {{-- Total:${{$settings}} --}}


                        </div>


                        <div>
                          <form action="{{route('cart.clear',[Auth::user()->id]) }}" method="get">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                          </form>
                        </div>

                        <button ><a href="{{route('offers.checkout',['settingsss'=>$settings])}}">pay online</a></button>

                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection

