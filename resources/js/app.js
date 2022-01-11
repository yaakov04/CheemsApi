require('./bootstrap');

import request from './request';

const btn = document.querySelector('#btn_request')


btn.addEventListener('click', request);