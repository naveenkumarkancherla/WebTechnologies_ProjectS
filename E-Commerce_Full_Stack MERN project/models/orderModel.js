// models/Property.js
import mongoose from 'mongoose';

const propertySchema = new mongoose.Schema({
  title: { type: String, required: true },
  description: { type: String, required: true },
  price: { type: Number, required: true },
  location: { type: String, required: true },
  // Add other fields as needed (e.g., type, images, owner details, etc.)
  // Example:
  // type: { type: String, enum: ['apartment', 'house', 'condo', 'villa'] },
  // images: [{ type: String }],
  // owner: { type: mongoose.Schema.Types.ObjectId, ref: 'User' },
});

export default mongoose.model('Property', propertySchema);
