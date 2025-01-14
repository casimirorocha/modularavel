import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Toast from 'bootstrap/js/dist/toast.js'

axios.interceptors.response.use(
	response => {
		return response;
	},
	error => {
		if (error.response.status === 401) {
			alert('You are not authorized to access this page. Please login.');
		}
		return Promise.reject(error);
	}
);

const toastTrigger = document.getElementById('toastBtn')

const toastLiveExample = document.getElementById('showToast')

if (toastTrigger) {
	const toastBootstrap = Toast.getOrCreateInstance(toastLiveExample)
	toastTrigger.addEventListener('click', () => {
		toastBootstrap.show()
	})
}
