<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>All New Update Here</title>

<style>
    html {
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE and Edge */
    }

    html::-webkit-scrollbar {
        display: none; /* Chrome, Safari and Edge */
    }
</style>
@vite(['resources/css/app.css', 'resources/js/app.js'])
 
</head>
<body>
    <div class="max-w-2xl mx-auto dark:bg-gray-800 shadow-lg rounded-lg my-0 pl-2">
        <a href="{{ url('/') }}" class="h-20 px-6 font-semibold rounded-md text-black dark:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
              <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
              <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
          </svg>  
        </a>
      </div>
    
{{-- Teacher Post is here  --}}
@foreach ($sortedPosts as $post)

<div class="max-w-2xl mx-auto my-4 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <!-- Post Header -->
    <div class="flex items-center p-4 border-b dark:border-gray-700">
      <img src="{{ asset('frontend/img/user.png') }}" alt="Profile Picture" class="w-12 h-12 rounded-full">
      <div class="ml-4">
        <span class="block font-semibold text-black dark:text-gray-100">{{ $post->user->name ?? 'Admin' }}</span>
        <span class="block text-sm text-gray-500 dark:text-gray-400">{{ $post->created_at->timezone('Asia/Dhaka')->format('l, d M Y, g:i A') }} <i class="bi bi-globe" ></i> </span>
      </div>
    </div>


    <!-- Post Content -->
    <div class="p-4 text-black dark:text-gray-100">
      <p class="leading-relaxed">{{ $post->description }}</p> 
    </div>
  
    <!-- Post Image (Optional) -->
    <div class="relative">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="w-full rounded-b-lg">
       @endif
    </div>
  
    <!-- Post Interactions -->
    <div class="flex justify-between items-center p-4 border-t dark:border-gray-700">
      <!-- Like Button -->
      <button class="flex items-center text-gray-600 dark:text-gray-400 hover:text-blue-600">
        <svg class="p-0.5 h-6 w-6 rounded-full z-20 bg-white dark:bg-gray-800 " xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'><defs><linearGradient id='a1' x1='50%' x2='50%' y1='0%' y2='100%'><stop offset='0%' stop-color='#18AFFF'/> <stop offset='100%' stop-color='#0062DF'/></linearGradient><filter id='c1' width='118.8%' height='118.8%' x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'><feGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/><feOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/><feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/> <feColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/></filter><path id='b1' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/></defs><g fill='none'><use fill='url(#a1)' xlink:href='#b1'/><use fill='black' filter='url(#c1)' xlink:href='#b1'/><path fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/> </g> </svg>
      <span class="ml-1 text-gray-500 dark:text-gray-400  font-light"> 404 </span>
        Like
      </button>
  
      <!-- Comment Button -->
      <button class="flex items-center text-gray-600 dark:text-gray-400 hover:text-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
          </svg>          
        Comment
      </button>
  
      <!-- Share Button -->
      <button class="flex items-center text-gray-600 dark:text-gray-400 hover:text-blue-600 shear shear-to">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
          </svg>          
        Share
      </button>
    </div>
  </div>
  
@endforeach


{{-- Java script is here  --}}
 <script>
  document.addEventListener('DOMContentLoaded', () => {
    const shareButtons = document.querySelectorAll('.shear.shear-to'); // Share button selector
    
    shareButtons.forEach(button => {
        button.addEventListener('click', async () => {
            const postContent = button.closest('.max-w-2xl'); // Post container
            const description = postContent.querySelector('p').innerText; // Post description
            const postImage = postContent.querySelector('img')?.src || ''; // Post image (if exists)
            const shareUrl = window.location.href; // Current page URL
            
            if (navigator.share) {
                try {
                    await navigator.share({
                        title: 'Check out this post!',
                        text: description,
                        url: shareUrl,
                    });
                    console.log('Post shared successfully!');
                } catch (error) {
                    console.error('Error sharing:', error);
                }
            } else {
                alert('Share API is not supported in your browser. Please share manually.');
            }
        });
    });
});

  </script>

</body>
</html>