<template>
  <div class="photo">
    <figure class="photo_wrapper">
      <img
        class="photo_image"
        :src="item.url"
        :alt="`photo by ${item.owner.name}`"
      />
    </figure>
    <RouterLink
      class="photo__overlay"
      :to="`/photos/${item.id}`"
      :title="`View the photo by ${item.owner.name}`"
    >
      <!-- いいね!ボタン -->
      <div class="photo__controls">
        <button class="photo__action photo__action--like" title="Like photo">
          <i class="icon ion-md-heart"></i>12
        </button>
        <!-- ダウンロードボタン -->
        <a
          class="photo__action"
          title="Download photo"
          @click.stop
          :href="`/photos/${item.id}/download`"
        >
          <i class="icon ion-md-arrow-round-down"></i>
        </a>
      </div>
      <div class="photo__username">
        {{ item.owner.name }}
      </div>
    </RouterLink>
  </div>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true,
    },
  },
};
</script>