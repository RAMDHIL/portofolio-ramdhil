<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio Fadhilah Ramadhan</title>
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/TextPlugin.min.js"></script>
</head>

<body>
    <div class="navbar bg-slate-700 shadow-sm fixed z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a class="text-lg hover:bg-cyan-500" href="#">Beranda</a></li>
                    <li><a class="text-lg hover:bg-cyan-500" href="#tentang_saya">Tentang Saya</a></li>
                    <li><a class="text-lg hover:bg-cyan-500" href="#project_saya">Projek Saya</a></li>
                    <li><a class="text-lg hover:bg-cyan-500" href="#sertifikat_saya">Sertifikat Saya</a></li>
                    <li><a class="text-lg hover:bg-cyan-500" href="#kontak_saya">Kontak</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a href="#" class="btn btn-ghost text-xl text-cyan-500  font-bold hover:bg-slate-800">Fadhilah Ramadhan</a>
        </div>
        <div class="navbar-end">
            
        </div>
    </div>
    <div class="w-full h-screen flex justify-center bg-slate-800 items-center p-10">
        <div class="hero min-h-screen">
            <div class="hero-content flex-col gap-10 lg:flex-row-reverse">
                <img id="gambar" src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
                    class="max-w-sm rounded-lg shadow-2xl" />
                <div id="text">
                    <h1 id="title" class="text-white text-2xl md:text-2xl lg:text-5xl font-bold text-shadow-2xl"></h1>
                    <p class="py-6 text-lg text-white">
                        Saya adalah mahasiswa dari <strong class="text-2xl font-bold text-info ">universitas Bina Sarana
                            Informatika</strong> Program Studi Sistem Informasi
                    </p>
                    <button class="btn btn-soft btn-info ">Hubungi Saya</button>
                </div>
            </div>
        </div>

    </div>

    <section id="tentang_saya" class="overflow-hidden bg-slate-900 py-16 px-6 w-full min-h-screen">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <img id="gambar-about" src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
                class="max-w-sm h-80 rounded-lg shadow-2xl" />
            <div class="flex-1">
                <h2 id="box" class="divider divider-info text-3xl font-bold mb-7 text-info">Tentang Saya</h2>
                <p class="text-white leading-relaxed mb-6 text-xl">Halo! Nama saya adalah Fadhilah Ramadhan bisa dipanggil <span
                        class="text-slate-400 text-xl font-semibold uppercase mx-1">padil</span> Saya Adalah Seorang
                    mahasiswa Semester 3 Saya Seorang Web Developer </p>
                <h2 class="font-bold text-2xl inline-block bg-slate-800 p-2 mt-5 rounded-md text-cyan-600">Beberapa
                    Tools yang saya kuasai</h2>
                <div id="tools" class="flex flex-row  gap-7 w-auto p-3 mt-5">
                    <i
                        class='text-white bx bxl-php text-4xl inline-block bg-slate-800 p-1 rounded-full hover:text-cyan-300 hover:scale-95 transition-all duration-300'></i>
                    <i
                        class='text-white bx bxl-tailwind-css text-4xl inline-block bg-slate-800 p-1 rounded-full hover:text-cyan-300 hover:scale-95 transition-all duration-300'></i>
                    <i
                        class='text-white bx bxl-javascript text-4xl inline-block bg-slate-800 p-1 rounded-full hover:text-cyan-300 hover:scale-95 transition-all duration-300'></i>
                    <i
                        class="text-white fa-brands fa-laravel text-4xl inline-block bg-slate-800 p-1 rounded-full  hover:text-cyan-300 hover:scale-95 transition-all duration-300"></i>
                </div>
            </div>
        </div>
    </section>
    <section id="project_saya" class="bg-slate-800 py-16 px-6 w-full min-h-screen">
        <h2 id="project" class="divider divider-info text-3xl font-bold mb-10 text-info">Project Saya</h2>
        <div
            class="max-w-1/1 p-3  min-h-screen grid gap-10 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 place-items-center ">
            <div id="sertifikat" class="flex w-36 lg:w-52 flex-col gap-4">
                <div class="skeleton h-32 w-full flex justify-center items-center">
                    <h2 class="lg:text-xl text-base font-semibold text-slate-400">Comming Soon</h2>
                </div>
                <div class="skeleton h-4 w-28"></div>
                <div class="skeleton h-4 w-full"></div>
                <div class="skeleton h-4 w-full"></div>
            </div>
            <div id="sertifikat" class="flex w-36 lg:w-52 flex-col gap-4">
                <div class="skeleton h-32 w-full flex justify-center items-center">
                    <h2 class="lg:text-xl text-base font-semibold text-slate-400">Comming Soon</h2>
                </div>
                <div class="skeleton h-4 w-28"></div>
                <div class="skeleton h-4 w-full"></div>
                <div class="skeleton h-4 w-full"></div>
            </div>
            <div id="sertifikat" class="flex w-36 lg:w-52 flex-col gap-4">
                <div class="skeleton h-32 w-full flex justify-center items-center">
                    <h2 class="lg:text-xl text-base font-semibold text-slate-400">Comming Soon</h2>
                </div>
                <div class="skeleton h-4 w-28"></div>
                <div class="skeleton h-4 w-full"></div>
                <div class="skeleton h-4 w-full"></div>
            </div>
            <div id="sertifikat" class="flex w-36 lg:w-52 flex-col gap-4">
                <div class="skeleton h-32 w-full flex justify-center items-center">
                    <h2 class="lg:text-xl text-base font-semibold text-slate-400">Comming Soon</h2>
                </div>
                <div class="skeleton h-4 w-28"></div>
                <div class="skeleton h-4 w-full"></div>
                <div class="skeleton h-4 w-full"></div>
            </div>
            <div id="sertifikat" class="flex w-36 lg:w-52 flex-col gap-4">
                <div class="skeleton h-32 w-full flex justify-center items-center">
                    <h2 class="lg:text-xl text-base font-semibold text-slate-400">Comming Soon</h2>
                </div>
                <div class="skeleton h-4 w-28"></div>
                <div class="skeleton h-4 w-full"></div>
                <div class="skeleton h-4 w-full"></div>
            </div>
        </div>
        <h2 id="project" class="divider divider-info text-3xl font-bold mb-10 text-info mt-10">Sertifikat Saya</h2>
        <div id="sertifikat_saya"
            class="max-w-1/1 p-3  max-h-screen grid gap-5 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4  place-items-center">

            {{-- <div class="max-w-sm bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Sertifikat Tailwind CSS</h2>
                <p class="text-gray-600 text-sm mb-4">Fadhilah Ramadhan telah menyelesaikan pelatihan ini pada Agustus
                    2025.</p>

                <button onclick="window.open('/img/bsi.png', '_blank')"
                    class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
                    Lihat Sertifikat
                </button>
            </div> --}}
            <div id="sertifikat" class="relative w-32 lg:w-52 h-40 group overflow-hidden rounded-lg shadow-lg">
                <!-- Gambar -->
                <img src="{{ asset('img/Screenshot 2025-08-07 210938.png') }}" alt="Sertifikat Tailwind"
                    class="w-full h-full object-cover">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black bg-opacity-10  flex flex-col gap-5 items-center justify-center opacity-0 group-hover:opacity-80 transition-opacity z-10">
                    <p class="text-white text-base text-center font-semibold">Sertifikat Basis Data </p>
                    <button onclick="window.open('/pdf/Certificate CompetenceFADHILAH RAMADHAN.pdf','_blank')"
                        class="btn btn-soft btn-info text-white">lihat <i class="fa-regular fa-eye"></i></button>
                </div>

            </div>
            <div id="sertifikat" class="relative w-32 lg:w-52 h-40 group overflow-hidden rounded-lg shadow-lg">
                <!-- Gambar -->
                <img src="{{ asset('img/Screenshot 2025-08-07 211023.png') }}" alt="Sertifikat Tailwind"
                    class="w-full h-full object-cover">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black bg-opacity-10  flex flex-col gap-5 items-center justify-center opacity-0 group-hover:opacity-80 transition-opacity z-10">
                    <p class="text-white text-base text-center font-semibold">Sertifikat Basis Data </p>
                    <button onclick="window.open('/pdf/Fadhilah Ramadhan.pdf','_blank')"
                        class="btn btn-soft btn-info text-white">lihat <i class="fa-regular fa-eye"></i></button>
                </div>

            </div>
           
        </div>
    </section>
    <footer id="kontak_saya" class="footer sm:footer-horizontal bg-neutral text-neutral-content p-10">
        <aside>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd" clip-rule="evenodd" class="fill-current animate-bounce">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p class="flex flex-col">
                <span class="text-3xl font-bold text-gray-100">Terima kasih telah mengunjungi portofolio saya</span>
                <br />
                <span class="mt-2">Hak Cipta © {{ date('Y') }} Fadhilah Ramadhan. Seluruh hak dilindungi</span>
            </p>
        </aside>
        <nav>
            <h6 class="footer-title">Social</h6>
            <div class="grid grid-flow-col gap-3">
                <a class="hover:text-cyan-500 cursor-pointer">
                    <i class="fa-brands fa-whatsapp text-3xl"></i>
                </a>
                <a class="hover:text-cyan-500 cursor-pointer">
                    <i class="fa-brands fa-facebook text-3xl"></i>
                </a>
                <a class="hover:text-cyan-500 cursor-pointer">
                   <i class="fa-brands fa-instagram text-3xl"></i>
                </a>
                <a href="" class=" hover:text-cyan-500 cursor-pointer">
                    <i class="fa-brands fa-github text-3xl"></i>
                </a>
                
            </div>
        </nav>
    </footer>

</body>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(TextPlugin)
        gsap.to('#title', {
            duration: 3,
            delay: 1.5,
            text: 'Halo Saya Fadhilah Ramadhan | Web Developer'
        })
        gsap.from('#gambar-about', {
            x: -300,
            duration: 2,
            opacity: 1,
            ease: 'elastic'
        })
        gsap.from('#gambar', {
            y: -300,
            duration: 2,
            opacity: 1,
            ease: 'bounce',
        })
        gsap.from('#text', {
            x: -200,
            duration: 1,
            opacity: 0,
            delay: 0.5
        })
    })
    gsap.from("#box", {
        scrollTrigger: {
            trigger: "#box",
            start: "top 80%",
            toggleActions: "play none none reverse"
        },
        y: 150,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.7)"
    });
    gsap.from("#tools", {
        scrollTrigger: {
            trigger: "#tools",
            start: "top 80%",
            toggleActions: "play none none reverse"
        },
        x: 50,
        opacity: 0,
        duration: 1,
        ease: "easin(1.7)"
    });
     gsap.from("#project", {
        scrollTrigger: {
            trigger: "#project",
            start: "top 80%",
            toggleActions: "play none none reverse"
        },
        y: -150,
        opacity: 0,
        duration: 2,
        ease: "back.out(1.7)"
    });

    const tl = gsap.timeline({
        scrollTrigger: {
            scrub: 1,
            pin: true,
            trigger: "#gambar",
            start: "50% 50%",
            endTrigger: "#gambar",
            end: "bottom 50%",
        },
    });

    tl.to("#gambar", {
        rotateZ: 100,
    });
    
  gsap.utils.toArray("#sertifikat").forEach((card, index) => {
    gsap.from(card, {
      scrollTrigger: {
        trigger: card,
        start: "top 85%", // Mulai animasi saat bagian atas card mencapai 85% dari viewport
        toggleActions: "play none none reverse"
      },
      opacity: 0,
      y: 50,
      duration: 0.8,
      delay: index * 0.1, // animasi berurutan (optional)
      ease: "power3.out"
    });
  });
</script>

</html>
