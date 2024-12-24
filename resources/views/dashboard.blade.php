<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('user-post.index') }}" 
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition duration-300">
                        Create New Post
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-7xl mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <h1 class="sm:px-6 lg:px-8 text-2xl md:text-4xl lg:text-5xl text-center text-green-950 bg-white" style="font-family: kalpurush;"> আপনার সাধারণ দান </h1>
        {{-- Donation Information is here  --}}
        <div class="overflow-x-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-3">
                @if($userDonation->isNotEmpty())
                @foreach ($userDonation as $donation)
                <div class="bg-blue-500 text-white text-center py-4 rounded">
                    <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                               <p class="text-black fs-5">Donation Info</p>
                               <p class="text-black">Donor Name:- <span class="text-red-600"> {{ $donation->donor_name }} </span></p>
                               <p class="text-black">Donation Amount:- <span class="text-red-600"> {{ $donation->amount }} </span></p>
                               <p class="text-black">Transaction ID:- <span class="text-red-600"> {{ $donation->transaction_number }}  </span></p>
                               <p class="text-black">Donar Number:- <span class="text-red-600"> {{ $donation->donor_contact }} </span>  </p>
                            </td>
                        </tr>
                    </table>
                </div>
                @endforeach
                @else
                <p class="text-center lg:text-xl text-black sm:text-sm"> No Data Has Been Found For You</p>
                @endif
              </div>              
        </div>          
        <h1 class="sm:px-6 lg:px-8 text-2xl md:text-4xl lg:text-5xl text-center text-green-950 bg-white"
        style="font-family: kalpurush;" > আপনার যাকাত ফান্ড</h1>
        {{-- Donation Information is here  --}}
        <div class="overflow-x-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-3">
                @if($zakat->isNotEmpty())
                @foreach ($zakat as $zakatFund)
                <div class="bg-blue-500 text-white text-center py-4 rounded">
                    <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <p class="text-black fs-5">Zakat Info</p>
                               <p class="text-black">Donor Name:- <span class="text-red-600"> {{ $zakatFund->donor_name }} </span></p>
                               <p class="text-black">Donation Amount:- <span class="text-red-600"> {{ $zakatFund->amount }} </span></p>
                               <p class="text-black">Transaction ID:- <span class="text-red-600"> {{ $zakatFund->transaction_number }}  </span></p>
                               <p class="text-black">Donar Number:- <span class="text-red-600"> {{ $zakatFund->donor_contact }} </span>  </p>
                            </td>
                        </tr>
                    </table>
                </div>
                @endforeach
                @else
                <p class="text-center lg:text-xl text-black sm:text-sm"> No Data Has Been Found For You</p>
                @endif
              </div>              
        </div>          
    </div>
</x-app-layout>
