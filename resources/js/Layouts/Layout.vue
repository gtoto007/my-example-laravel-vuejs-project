<script setup>
import {ref} from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link} from '@inertiajs/vue3';
import Message from "@/Components/Message.vue";


const showingNavigationDropdown = ref(false);
</script>


<template>
  <div>
    <div class="min-h-screen justify-between flex flex-col">

      <Message v-if="$page.props.flash.message" :message="$page.props.flash.message"/>

      <nav class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex">
              <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <NavLink href="/">
                  Home
                </NavLink>
              </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
              <!-- Settings Dropdown -->
              <div v-if="$page.props.auth.user" class="ml-3 relative">
                <Dropdown align="right" width="48">
                  <template #trigger>
                  <span class="inline-flex rounded-md">
                      <button
                          type="button"
                          class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                          {{ $page.props.auth.user.name }}
                          <svg
                              class="ml-2 -mr-0.5 h-4 w-4"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor">
                              <path
                                  fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"/>
                          </svg>
                      </button>
                  </span>
                  </template>

                  <template #content>
                    <DropdownLink v-if="$page.props.auth.user.is_admin" :href="route('apply.index')"> Dashboard</DropdownLink>
                    <DropdownLink :href="route('profile.edit')"> Profile</DropdownLink>
                    <DropdownLink :href="route('logout')" method="post" as="button">
                      Log Out
                    </DropdownLink>
                  </template>
                </Dropdown>
              </div>
              <div class=" p-6 text-right">
                <template v-if="!$page.props.auth.user">
                  <Link
                      :href="route('login')"
                      class="text-gray-400 hover:text-gray-900">
                    Login
                  </Link>

                  <Link :href="route('register')"
                        class="ml-4  text-gray-400 hover:text-gray-900">
                    Registrazione
                  </Link>
                </template>
              </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
              <button
                  @click="showingNavigationDropdown = !showingNavigationDropdown"
                  class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path
                      :class="{hidden: showingNavigationDropdown,'inline-flex': !showingNavigationDropdown,}"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
                  <path
                      :class="{hidden: !showingNavigationDropdown,'inline-flex': showingNavigationDropdown,}"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }" class="sm:hidden">
          <div class="pt-2 pb-3 space-y-1">
            <ResponsiveNavLink href="/">
              Home
            </ResponsiveNavLink>
          </div>

          <template v-if="$page.props.auth.user">
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
              <div class="px-4">
                <div class="font-medium text-base text-gray-800">
                  {{ $page.props.auth.user.name }}
                </div>
                <div class="font-medium text-sm text-gray-500"> {{ $page.props.auth.user.email }}</div>
              </div>

              <div class="mt-3 space-y-1">
                <ResponsiveNavLink v-if="$page.props.auth.user.is_admin" :href="route('apply.index')">Dashboard</ResponsiveNavLink>
                <ResponsiveNavLink :href="route('profile.edit')"> Profile</ResponsiveNavLink>
                <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                  Log Out
                </ResponsiveNavLink>
              </div>
            </div>
          </template>
          <template v-else>
            <ResponsiveNavLink :href="route('login')"> Login</ResponsiveNavLink>
            <ResponsiveNavLink :href="route('register')"> Registrazione</ResponsiveNavLink>
          </template>
        </div>
      </nav>

      <!-- Page Heading -->
      <header class="bg-white shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot name="header"/>
        </div>
      </header>

      <!-- Page Content -->
      <main>
        <slot/>
      </main>
      <footer class="h-16 bg-gray-100 pt-4 pl-20">
        In bocca a lupo! @Bitboss srl
      </footer>
    </div>
  </div>
</template>e>