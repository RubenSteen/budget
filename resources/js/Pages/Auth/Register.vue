<template>
  <Head title="Register" />

  <main>
    <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Register your account</h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Or
          <a href="login" class="font-medium text-indigo-600 hover:text-indigo-500"> already have a account? </a>
        </p>
      </div>

      <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
          <form class="space-y-6" @submit.prevent="submit">

            <div>
              <label for="username" class="block text-sm font-medium text-gray-700"> Username </label>
              <div class="mt-1 relative rounded-md shadow-sm">
                <input v-model="form.username" type="text" name="username" id="username" :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500': form.errors.username}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" aria-invalid="true" aria-describedby="username-error" required>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                </div>
              </div>
              <p v-if="form.errors.username" v-text="form.errors.username" class="mt-2 text-sm text-red-600" id="username-error" />
            </div>

            <div>
              <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
              <div class="mt-1">
                <div class="mt-1 relative rounded-md shadow-sm">
                  <input v-model="form.email" type="email" name="email" id="email" :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500': form.errors.email}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" aria-invalid="true" aria-describedby="email-error" required>
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                </div>
              </div>
              <p v-if="form.errors.email" v-text="form.errors.email" class="mt-2 text-sm text-red-600" id="email-error" />
              </div>
            </div>

            <div>
              <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
              <div class="mt-1">
                <div class="mt-1 relative rounded-md shadow-sm">
                  <input v-model="form.password" type="password" name="password" id="password" :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500': form.errors.password}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" aria-invalid="true" aria-describedby="password-error" required>
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"></div>
                </div>
                <p v-if="form.errors.password" v-text="form.errors.password" class="mt-2 text-sm text-red-600" id="email-error" />
              </div>
            </div>

            <div>
              <label for="password_confirmation " class="block text-sm font-medium text-gray-700"> Password Confirmation </label>
              <div class="mt-1">
                <div class="mt-1 relative rounded-md shadow-sm">
                  <input v-model="form.password_confirmation " type="password" name="password_confirmation " id="confirm_password" :class="{ 'border-red-300 text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500': form.errors.password}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" aria-invalid="true" aria-describedby="password-error" required>
                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"></div>
                </div>
              </div>
            </div>


            <div>
              <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign in</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  layout: null,
};
</script>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'; 

let form = useForm({
  username: '',
  email: '',
  password: '',
  password_confirmation : '',
});

let submit = () => {
  form.post('/register');
};
</script>