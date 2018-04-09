FROM node

WORKDIR /usr/src/app

COPY package*.json ./

COPY . .

RUN npm install

EXPOSE 3030:3030

CMD [ "npm", "start" ]

