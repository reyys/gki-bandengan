    <div class="h-full">
        <a href="/blogs/{{ $blog->slug }}">
            <article class="flex max-w-xl flex-col items-start bg-white border h-full">
                <img src="/images/church.jpg" />
                <div class="p-5">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">{{ $blog->created_at->diffForHumans() }}</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $blog->category->name }}</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="#" class="line-clamp-1">
                                <span class="absolute inset-0"></span>
                                {{ $blog->title }}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $blog->description }}
                        </p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="h-10 w-10 rounded-full bg-gray-50">
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    {{ $blog->user->name }}
                                </a>
                            </p>
                            <p class="text-gray-600">{{ $blog->user->email }}</p>
                        </div>
                    </div>
                </div>
            </article>
        </a>
    </div>
