<template>
    <div>
      <div class="card-header">Our Community</div>
      <div class="card-container row d-flex justify-content-center">
        <div v-for="user in users" :key="user.id" class="p-3 m-3 card col-lg-3 col-sm-5">
          <h4><strong>{{ user.name }}</strong></h4>
          <p>{{ user.email }}</p>
          <p>{{ user.about }}</p>
          <a class="btn btn-primary">Book a Trial</a>
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
  