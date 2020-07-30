<template>
    <panel-item :field="field" />
</template>

<script>
export default {
    props: ["resource", "resourceName", "resourceId", "field"],
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
