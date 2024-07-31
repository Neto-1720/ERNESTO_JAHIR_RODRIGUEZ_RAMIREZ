const Joi = require('joi');

const schema = Joi.object({
  name: Joi.string().min(3).required().messages({
    'string.base': 'El nombre debe ser un texto.',
    'string.empty': 'El nombre es obligatorio.',
    'string.min': 'El nombre debe tener al menos {#limit} caracteres.',
    'any.required': 'El nombre es obligatorio.'
  }),
  description: Joi.string().min(10).required().messages({
    'string.base': 'La descripción debe ser un texto.',
    'string.empty': 'La descripción es obligatoria.',
    'string.min': 'La descripción debe tener al menos {#limit} caracteres.',
    'any.required': 'La descripción es obligatoria.'
  }),
  height: Joi.number().positive().required().messages({
    'number.base': 'La altura debe ser un número.',
    'number.positive': 'La altura debe ser un número positivo.',
    'any.required': 'La altura es obligatoria.'
  }),
  length: Joi.number().positive().required().messages({
    'number.base': 'La longitud debe ser un número.',
    'number.positive': 'La longitud debe ser un número positivo.',
    'any.required': 'La longitud es obligatoria.'
  }),
  width: Joi.number().positive().required().messages({
    'number.base': 'El ancho debe ser un número.',
    'number.positive': 'El ancho debe ser un número positivo.',
    'any.required': 'El ancho es obligatorio.'
  }),
  precio: Joi.string().uri().optional().messages({
    'number.base': 'El precio debe ser un número.',
    'number.positive': 'El precio debe ser un número positivo.',
    'any.required': 'El precio es obligatorio.'
});



// Validación de los datos de entrada
const { error, value } = schema.validate(formData);

if (error) {
  console.error('Error en la validación:', error.details);
} else {
  console.log('Datos válidos:', value);
}