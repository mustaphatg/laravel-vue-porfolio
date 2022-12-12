<template>
    <div class="drawer drawer-mobile">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />

        <div class="drawer-content">
            <!-- header -->
            <Header></Header>
            <!-- end of header -->

            <!-- Page content here -->
            <Nuxt class="" />
            <!-- Page content here -->
        </div>

        <div class="drawer-side">
            <label for="my-drawer" class="drawer-overlay"></label>

            <ul class="menu bg-base-100 lg:hidden">
                <li class="menu-title mb-4">
                    <span>Mobile Links</span>
                </li>
                <li class=""><nuxt-link to="/">Home</nuxt-link></li>
                <li class=""><nuxt-link to="/about">About</nuxt-link></li>
                <li class="">
                    <nuxt-link to="/experience">Experience</nuxt-link>
                </li>
                <li class=""><nuxt-link to="/projects">Projects</nuxt-link></li>
                <li class=""><nuxt-link to="/contact">Contact</nuxt-link></li>
            </ul>
        </div>
    </div>
</template>
