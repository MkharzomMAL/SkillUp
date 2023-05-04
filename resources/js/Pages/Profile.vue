<template>
    <div class="card p-3 shadow-sm rounded">
      <h1 class="mb-4">My Profile</h1>
      <form @submit.prevent="updateProfile">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input id="name" type="text" class="form-control rounded-pill" v-model="form.name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input id="email" type="email" class="form-control rounded-pill" v-model="form.email">
        </div>
        <div class="mb-3">
          <label for="old_password" class="form-label">Old Password</label>
          <input id="old_password" type="password" class="form-control rounded-pill" v-model="form.password">
        </div>
        <div class="mb-3">
          <label for="new_password" class="form-label">New Password</label>
          <input id="new_password" type="password" class="form-control rounded-pill" v-model="form.password">
        </div>
        <div class="mb-3">
          <label for="confirm_password" class="form-label">Confirm Password</label>
          <input id="confirm_password" type="password" class="form-control rounded-pill" v-model="form.password">
        </div>
        <div>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </template>
  
  
  <script>
  import { reactive } from 'vue'
  import axios from 'axios'
  
  export default {
    data() {
      return {
        form: reactive({
          name: '',
          email: '',
          password: '',
        }),
        user: null,
      }
    },
  
    mounted() {
      // Fetch user data from the server
      axios.get('/api/user').then(response => {
        this.user = response.data
        // Populate the form with user data
        this.form.name = this.user.name
        this.form.email = this.user.email
      })
    },
  
    methods: {
      updateProfile() {

      },
    },
  }
  </script>
  