<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="https://raw.githubusercontent.com/laracasts/Tweety/23639dd1d6d9bce51cb67161841005880e3c0394/public/images/default-profile-banner.jpg"
                alt=""
                class="mb-2"
            >
            <img
                src="{{ $user->avatar }}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0"
                style="left: 50%; transform: translateX(-50%) translateY(50%);"
                width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a
                    href=""
                    class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                >
                    Edit Profile
                </a>

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            The name’s Bugs. Bugs Bunny. Don’t wear it out. Bugs is an anthropomorphic gray
            and white rabbit or hare who is famous for his flippant, insouciant personality.
            He is also characterized by a Brooklyn accent, his portrayal as a trickster,
            and his catch phrase "Eh...What's up, doc?"
        </p>
    </header>

    @include ('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>
