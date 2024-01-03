<nav class="flex flex-col py-16 px-5 items-center shrink-0 gap-16 w-64 h-screen bg-red-50 border-red-950 border-r-2">
    @if (isset($data))
        <a href="{{ route('user-dashboard', ['nik_admedika' => $data->nik_admedika]) }}">
            <img src="{{ asset('/images/admedLogo.png') }}" alt="Logo Admedika" class="shrink-0 w-[72px] h-auto">
        </a>

        <div class="flex flex-col justify-center items-center w-full gap-16">
            <div class="flex flex-col w-full justify-center items-center gap-4">
            <a href="{{ route('edit-data', $data->nik_admedika) }}"
                class="flex w-full items-center px-6 py-3 gap-4 cursor-pointer hover:rounded-md hover:border-[1px] hover:border-red-950 decoration-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <mask id="mask0_80_68" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                        height="24">
                        <rect width="24" height="24" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_80_68)">
                        <path
                            d="M17 15.6955C16.2628 15.6955 15.6362 15.4375 15.1202 14.9215C14.6042 14.4054 14.3461 13.7788 14.3461 13.0417C14.3461 12.3045 14.6042 11.6779 15.1202 11.1619C15.6362 10.6459 16.2628 10.3878 17 10.3878C17.7371 10.3878 18.3637 10.6459 18.8798 11.1619C19.3958 11.6779 19.6538 12.3045 19.6538 13.0417C19.6538 13.7788 19.3958 14.4054 18.8798 14.9215C18.3637 15.4375 17.7371 15.6955 17 15.6955ZM17 14.4391C17.3949 14.4391 17.7265 14.3049 17.9948 14.0365C18.2632 13.7682 18.3974 13.4366 18.3974 13.0417C18.3974 12.6468 18.2632 12.3152 17.9948 12.0468C17.7265 11.7784 17.3949 11.6442 17 11.6442C16.6051 11.6442 16.2735 11.7784 16.0051 12.0468C15.7367 12.3152 15.6025 12.6468 15.6025 13.0417C15.6025 13.4366 15.7367 13.7682 16.0051 14.0365C16.2735 14.3049 16.6051 14.4391 17 14.4391ZM12.1282 22.1474C11.9066 22.1474 11.7209 22.0724 11.571 21.9225C11.4211 21.7726 11.3461 21.5869 11.3461 21.3653V19.5935C11.3461 19.304 11.4151 19.0317 11.5531 18.7767C11.6911 18.5216 11.8843 18.3183 12.1327 18.1666C12.5959 17.8872 12.9922 17.6864 13.3215 17.5644C13.6507 17.4424 14.0822 17.3243 14.6159 17.2101C14.7811 17.1794 14.9453 17.1804 15.1087 17.2129C15.2721 17.2454 15.4051 17.327 15.5077 17.4577L17 19.3788L18.4776 17.4577C18.5872 17.3234 18.7213 17.2409 18.8801 17.2101C19.0388 17.1794 19.2043 17.18 19.3767 17.2117C19.9127 17.3267 20.3413 17.4444 20.6623 17.5648C20.9833 17.6852 21.3799 17.8858 21.8519 18.1666C22.1006 18.3179 22.2948 18.5205 22.4346 18.7743C22.5743 19.0282 22.6474 19.298 22.6538 19.5839V21.3653C22.6538 21.5869 22.5788 21.7726 22.4289 21.9225C22.2791 22.0724 22.0933 22.1474 21.8718 22.1474H12.1282ZM12.5878 20.891H16.5724L14.6756 18.4269C14.3044 18.5411 13.9452 18.676 13.5979 18.8314C13.2506 18.9869 12.9139 19.1594 12.5878 19.3487V20.891ZM17.4339 20.891H21.3974V19.3487C21.0748 19.1559 20.7404 18.9844 20.3944 18.8339C20.0484 18.6835 19.6919 18.551 19.325 18.4365L17.4339 20.891ZM4.75637 19.2436V4.7564V8.82117V8.2468V19.2436ZM5.06867 20.5C4.63721 20.5 4.2679 20.346 3.96075 20.038C3.65358 19.7301 3.5 19.3627 3.5 18.9359V5.06412C3.5 4.63731 3.65398 4.26992 3.96195 3.96197C4.2699 3.65401 4.63728 3.50002 5.0641 3.50002H18.9358C19.3627 3.50002 19.7301 3.65401 20.038 3.96197C20.346 4.26992 20.5 4.63731 20.5 5.06412V9.98202C20.3337 9.74912 20.1481 9.53257 19.9432 9.33237C19.7383 9.13216 19.5051 8.96347 19.2436 8.8263V5.06412C19.2436 4.97437 19.2147 4.90065 19.157 4.84295C19.0993 4.78525 19.0256 4.7564 18.9358 4.7564H5.0641C4.97435 4.7564 4.90063 4.78525 4.84293 4.84295C4.78523 4.90065 4.75637 4.97437 4.75637 5.06412V18.9359C4.75637 19.0256 4.78523 19.0993 4.84293 19.157C4.90063 19.2147 4.97435 19.2436 5.0641 19.2436H9.22305C9.21707 19.3008 9.21258 19.3602 9.20958 19.4218C9.20659 19.4833 9.2051 19.5406 9.2051 19.5935V20.5H5.06867ZM7.87817 8.62177H15.2026C15.4449 8.50854 15.696 8.42415 15.956 8.3686C16.2161 8.31305 16.4807 8.27886 16.75 8.26602V7.6282C16.75 7.55375 16.7248 7.49134 16.6744 7.44097C16.624 7.39059 16.5616 7.3654 16.4871 7.3654H7.87817C7.70019 7.3654 7.551 7.42592 7.4306 7.54697C7.3102 7.66802 7.25 7.81802 7.25 7.99697C7.25 8.17591 7.3102 8.32477 7.4306 8.44357C7.551 8.56237 7.70019 8.62177 7.87817 8.62177ZM7.87817 12.6282H12.2532C12.266 12.4111 12.2936 12.1969 12.336 11.9856C12.3784 11.7744 12.4354 11.5698 12.507 11.3718H7.87817C7.70019 11.3718 7.551 11.4323 7.4306 11.5534C7.3102 11.6744 7.25 11.8244 7.25 12.0034C7.25 12.1823 7.3102 12.3312 7.4306 12.45C7.551 12.5688 7.70019 12.6282 7.87817 12.6282ZM7.87817 16.6346H10.6158C10.8428 16.4594 11.0796 16.3056 11.3259 16.1734C11.5723 16.0411 11.8277 15.9192 12.0923 15.8077V15.7769C12.0607 15.6513 12.0064 15.5534 11.9294 15.4833C11.8525 15.4133 11.7333 15.3782 11.5718 15.3782H7.87817C7.70019 15.3782 7.551 15.4387 7.4306 15.5598C7.3102 15.6808 7.25 15.8308 7.25 16.0098C7.25 16.1887 7.3102 16.3376 7.4306 16.4564C7.551 16.5752 7.70019 16.6346 7.87817 16.6346Z"
                            fill="#450A0A" />
                    </g>
                </svg>
                <p class="font-medium text-base">Lihat Data</p>
            </a>
        </div>
        @endif
        <svg xmlns="http://www.w3.org/2000/svg" class="w-full" height="2" viewBox="0 0 218 2" fill="none">
            <path d="M1 1H217" stroke="#450A0A" stroke-linecap="round" />
        </svg>

        <div class="w-full">

            <a href="{{ route('logout', ['nik_admedika' => $data->nik_admedika]) }}"
                class="flex w-full items-center px-4 py-3 gap-4 cursor-pointer hover:rounded-md hover:border-[1px] hover:border-red-950 decoration-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <mask id="mask0_80_74" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                        height="24">
                        <rect width="24" height="24" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_80_74)">
                        <path
                            d="M20.5878 12.6282H9.2423C9.064 12.6282 8.91472 12.5678 8.79447 12.4469C8.67424 12.3261 8.61413 12.1761 8.61413 11.997C8.61413 11.8178 8.67424 11.6688 8.79447 11.55C8.91472 11.4312 9.064 11.3718 9.2423 11.3718H20.5878L18.8827 9.66665C18.7587 9.54272 18.696 9.39689 18.6945 9.22917C18.693 9.06144 18.7545 8.9124 18.8789 8.78205C19.0117 8.65172 19.1628 8.58677 19.3322 8.5872C19.5016 8.58762 19.6517 8.65086 19.7826 8.77693L22.4679 11.4519C22.6239 11.6087 22.7018 11.7916 22.7018 12.0006C22.7018 12.2096 22.6239 12.3921 22.4679 12.5481L19.7826 15.2333C19.6592 15.3573 19.5127 15.4183 19.343 15.4163C19.1733 15.4144 19.0231 15.3483 18.8925 15.2179C18.7701 15.0876 18.7081 14.9385 18.7064 14.7705C18.7047 14.6026 18.769 14.4534 18.8993 14.3231L20.5878 12.6282ZM14.9583 8.60257V5.06412C14.9583 4.97437 14.9295 4.90065 14.8718 4.84295C14.8141 4.78525 14.7404 4.7564 14.6506 4.7564H5.0641C4.97435 4.7564 4.90062 4.78525 4.84292 4.84295C4.78522 4.90065 4.75637 4.97437 4.75637 5.06412V18.9359C4.75637 19.0256 4.78522 19.0993 4.84292 19.157C4.90062 19.2147 4.97435 19.2436 5.0641 19.2436H14.6506C14.7404 19.2436 14.8141 19.2147 14.8718 19.157C14.9295 19.0993 14.9583 19.0256 14.9583 18.9359V15.3974C14.9583 15.2191 15.0187 15.0698 15.1395 14.9496C15.2604 14.8294 15.4104 14.7692 15.5895 14.7692C15.7687 14.7692 15.9177 14.8294 16.0365 14.9496C16.1553 15.0698 16.2147 15.2191 16.2147 15.3974V18.9359C16.2147 19.3643 16.0611 19.7321 15.7539 20.0392C15.4468 20.3464 15.079 20.5 14.6506 20.5H5.0641C4.63568 20.5 4.2679 20.3464 3.96075 20.0392C3.65358 19.7321 3.5 19.3643 3.5 18.9359V5.06412C3.5 4.63571 3.65358 4.26793 3.96075 3.96078C4.2679 3.65361 4.63568 3.50002 5.0641 3.50002H14.6506C15.079 3.50002 15.4468 3.65361 15.7539 3.96078C16.0611 4.26793 16.2147 4.63571 16.2147 5.06412V8.60257C16.2147 8.78087 16.1543 8.93015 16.0334 9.0504C15.9126 9.17063 15.7626 9.23075 15.5835 9.23075C15.4043 9.23075 15.2553 9.17063 15.1365 9.0504C15.0177 8.93015 14.9583 8.78087 14.9583 8.60257Z"
                            fill="#450A0A" />
                    </g>
                </svg>
                <p class="font-medium text-base">Logout</p>
            </a>
        </div>
    </div>
</nav>
