<template lang="pug">
.content
  .title.m-b-md {{ $store.getters.appName }}
  .links
      a(v-for='link in links'
        :href='link.url')
        | {{ link.name }}
</template>

<script>
export default {
  data: _ => ({
    links: [
      {
        url: 'https://laravel.com/docs',
        name: 'Documentation'
      },
      {
        url: 'https://laracasts.com',
        name: 'Laracasts'
      },
      {
        url: 'https://laravel-news.com',
        name: 'News'
      },
      {
        url: 'https://forge.laravel.com',
        name: 'Forge'
      },
      {
        url: 'https://github.com/laravel/laravel',
        name: 'GitHub'
      }
    ]
  })
}
</script>