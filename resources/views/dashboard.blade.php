<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
       <div class="d-flex align-items-center">
           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
           </div>
           <h5 class="card-title">Total Number of Post:</span></h5>
           <div class="d-flex align-items-center">
                <div class="card-body">
                    <div class="ps-5">
                        <h2>{{ $Posts }}</h2>
                    </div>
                </div>
            </div>                                                                                         
           <h5 class="card-title">Total Unpublished Post:</span></h5>
           <div class="d-flex align-items-center">
                <div class="card-body">
                    <div class="ps-5">
                        <h2>{{ $UnpublishedPosts }}</h2>
                    </div>
                </div>
            </div>        
            <h5 class="card-title">Total Published Post:</span></h5>
           <div class="d-flex align-items-center">
                <div class="card-body">
                    <div class="ps-5">
                        <h2>{{ $PublishedPosts }}</h2>
                    </div>
                </div>
            </div> 
       </div>  
</x-app-layout>
