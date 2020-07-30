<template>
    <span>{{ field.value }}</span>
</template>

<script>
export default {
    props: ["resourceName", "field"],
    mounted() {
        if (this.field.url) {
            if (this.field.newtab) {
                window.open(this.field.url, "_blank");
            } else {
                window.location.href = this.field.url;
            }
        }
    }
};
</script>
