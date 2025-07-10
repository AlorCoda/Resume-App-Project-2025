# Use nginx alpine image as base
FROM nginx:alpine

# Copy all application files to nginx html directory
COPY . /usr/share/nginx/html

# Expose port 80
EXPOSE 80

# Start nginx (default command) ....
CMD ["nginx", "-g", "daemon off;"]