<template>
  <div>
    <h1>ユーザ一覧</h1>
    <ul>
      <li v-for="user in users" v-text="user.name" v-bind:key="user.id"></li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: [],
    };
  },
  created() {
    axios
      .get("/api/user")
      .then((response) => {
        this.users = response.data.users;
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>;