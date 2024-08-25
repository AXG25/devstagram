import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Arrastra tu imagen hasta aca',
    acceptedFiles: '.png, .jpg, .jpeg, .gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Eliminar',
    maxFiles: 1,
    uploadMultiple: false,
});

dropzone.on('sending', (file, xhr, formData) => {
    console.log(file)
})

dropzone.on('success', (file, response) => {
    console.log(response)
})

dropzone.on('error', (file, message) => {
    console.log(message)
})

dropzone.on('removedfile', () => {
    console.log('Archivo eliminado')
})
