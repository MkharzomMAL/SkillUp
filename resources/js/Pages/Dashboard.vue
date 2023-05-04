<template>
    <div>
      <div class="card-header">Learning Board</div>
      <div class="card-container row d-flex justify-content-center">
        <div v-for="user in users" :key="user.id" class="m-3 card col-lg-3 col-sm-6">
          <h3>{{ user.name }}</h3>
          <p>{{ user.email }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      users: {
        type: Array,
        required: true,
      },
    },
  };
  </script>
  