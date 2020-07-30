<template> </template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ["resourceName", "resourceId", "field"],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || "";
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || "");
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value;
        }
    },

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
