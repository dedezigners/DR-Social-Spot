<template>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" :class="classes" v-html="svg"></svg>
</template>

<script>
export default {
    props: {
        feather: {
            type: String,
            default: '',
            required: true
        }
    },
    mounted() {
        switch (this.feather) {
            case 'search': 
                this.svg = '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>';
                break;
            case 'x': 
                this.svg = '<line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>';
                break;
            case 'check': 
                this.svg = '<polyline points="20 6 9 17 4 12"></polyline>';
                break;
            case 'user': 
                this.svg = '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>';
                break;
            case 'lock': 
                this.svg = '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>';
                break;
            default:
                this.svg = '<circle cx="11" cy="11" r="10"></circle>';
                break;
        }
    },
    data() {
        return {
            svg: '',
            classes: 'feather feather-' + this.feather,
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
