<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    blogs: Array
})
</script>

<template>
    <div v-if="$page.props.flash.message">
        {{ $page.props.flash.message }}
    </div>
    <ul>
        <li v-for="blog in blogs" :key="blog.id">
            <Link class="text-blue-400" :href="route('inertia.show',{id: blog.id})">件名:{{ blog.title }}</Link>,
            本文:{{ blog.content }}
        </li>
    </ul>
    あああああ
</template>