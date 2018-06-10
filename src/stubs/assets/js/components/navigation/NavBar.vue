<template lang="pug">
  .top-right.links
      router-link(to="/") Home
      router-link(to="/secondpage") secondpage
      router-link(to="/error") 404 page
</template>

<script>
export default {
  data: _ => ({
    authenticated: false
  })
}
</script>
