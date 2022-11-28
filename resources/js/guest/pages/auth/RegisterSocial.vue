<template>
    <div class="content-wrap-sm">
        <h1 class="title">会員登録</h1>
        <div class="content">
            <form @submit.prevent="onSubmit" class="auth-form">
                <div class="auth-input-wrap">
                    <p class="auth-input-title"><span class="error-message">＊</span>氏名</p>
                    <input v-model="name" class="auth-input" type="text" @blur="nameChange">
                    <span class="error-message">{{ errors.name }}</span>
                </div>
                <div class="auth-input-wrap">
                    <p class="auth-input-title"><span class="error-message">＊</span>フリガナ</p>
                    <input v-model="name_kana" class="auth-input" type="text" @blur="nameKanaChange">
                    <span class="error-message">{{ errors.name_kana }}</span>
                </div>
                <div class="auth-input-wrap">
                    <p class="auth-input-title"><span class="error-message">＊</span>性別</p>
                    <select v-model="gender_id" class="auth-input" @blur="genderIdChange">
                        <option v-for="(value, option) in genderOptions" :value="value">{{ option }}</option>
                    </select>
                    <span class="error-message">{{ errors.gender_id }}</span>
                </div>
                <div class="auth-input-wrap">
                    <p class="auth-input-title"><span class="error-message">＊</span>メールアドレス</p>
                    <input :value="email" name="email" class="auth-input" type="email" disabled>
                    <span class="warning">※変更できません。</span>
                    <span class="error-message"><br>{{ errors.email }}</span>
                </div>
                <input type="hidden" v-model="google_id">
                <button class="btn btn-register" type="submit" :disabled="!meta.valid || isSubmitting">
                    登録する
                </button>
            </form>
        </div>
    </div>
</template>

<script lang="ts" setup>
import { useRoute, useRouter } from "vue-router";
import { useAuthStore } from "../../store/auth";
import { useField, useForm } from 'vee-validate';
import * as yup from 'yup';

const route = useRoute();
const router = useRouter();
const authStore = useAuthStore();
const genderOptions = {
    '男性': 1,
    '女性': 2,
    'その他': 3,
    '回答しない': 4
};

const formSchema = yup.object({
    name: yup.string().required('氏名は必須項目です。'),
    name_kana: yup.string().matches(/^[\u30A0-\u30FF]+$/, 'カタカナのみ有効です。').required('フリガナは必須項目です。'),
    gender_id: yup.string().required('性別は必須項目です。'),
    email: yup.string().email().required('メールアドレスは必須項目です。'),
})

const { errors, handleSubmit, meta, isSubmitting } = useForm({ validationSchema: formSchema })

const { value: name, handleChange: nameChange } = useField("name");
const { value: name_kana, handleChange: nameKanaChange } = useField("name_kana");
const { value: email } = useField("email", undefined, { initialValue: route.query.email });
const { value: gender_id, handleChange: genderIdChange } = useField("gender_id");
const { value: google_id } = useField("google_id", undefined, { initialValue: route.query.googleId });

const onSubmit = handleSubmit(async (values) => {
    const res = await authStore.register(values);
    if (res.result) {
        await authStore.fetchMe().then(() => {
            router.push({ name: 'register-complete' })
        });
    }
})



</script>
