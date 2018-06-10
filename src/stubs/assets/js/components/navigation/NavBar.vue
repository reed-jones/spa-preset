<template lang="pug">
  .top-right.links
      a(href="/") Home
      a(href="/secondpage") secondpage
      a(href="/error") 404 page
</template>

<script>
export default {
  data: _ => ({
    authenticated: false
  })
}
</script>
