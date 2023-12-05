<template>
    <a
        class="lan_ar"
        href="javascript:void(0)"
        v-if="locale === 'en'"
        @click="switchLanguage('ar')"
        >{{ $t("ar") }}</a
    >
    <a
        class="lan_en"
        href="javascript:void(0)"
        v-if="locale === 'ar'"
        @click="switchLanguage('en')"
        >{{ $t("en") }}</a
    >
</template>

<script>
import { useI18n } from "vue-i18n";
import Tr from "@/i18n/translation";

export default {
    setup() {
        const { locale } = useI18n();

        const switchLanguage = async (newLocale) => {
            await Tr.switchLanguage(newLocale);
            // Perform any additional actions or navigation as needed
        };

        return { locale, switchLanguage };
    },
};
</script>
