import COVID19Py
import telebot

covid19 = COVID19Py.COVID19()
bot = telebot.TeleBot('1613073957:AAEEz7p6XA8Sd2gozAJT6_Q1lhn8qS1Hfag')

@bot.message_handler(commands=['start'])
def welcome(message):
    send_mess = f'<b>Hello {message.from_user.first_name}!</b>\nEnter country'
    bot.send_message(message.chat.id, send_mess, parse_mode='html')


@bot.message_handler(content_types=['text'])
def mess(message):
    get_message_bot = message.text.strip().lower()
    if get_message_bot == 'ukraine':
        text = covid19.getLocationByCountryCode('UA')
        res = f"<b>Заражено - {text[0]['latest']['confirmed']}</b>\n<b>Умерло - {text[0]['latest']['deaths']}</b>\n"
        location = bot.send_message(message.chat.id, res, parse_mode='html')
    elif get_message_bot == 'russia':
        text = covid19.getLocationByCountryCode('RU')
        res = f"<b>Заражено - {text[0]['latest']['confirmed']}</b>\n<b>Умерло - {text[0]['latest']['deaths']}</b>\n"
        location = bot.send_message(message.chat.id, res, parse_mode='html')
    elif get_message_bot == 'usa':
        text = covid19.getLocationByCountryCode('US')
        res = f"<b>Заражено - {text[0]['latest']['confirmed']}</b>\n<b>Умерло - {text[0]['latest']['deaths']}</b>\n"
        location = bot.send_message(message.chat.id, res, parse_mode='html')
    elif get_message_bot == 'all':
        text = covid19.getLatest()
        res = f"<b>Заражено во всем мире - {text['confirmed']}</b>\n<b>Умерло - {text['deaths']}</b>\n"
        location = bot.send_message(message.chat.id, res, parse_mode='html')

    bot.send_message(message.chat.id, location, parse_mode='html')


bot.polling(none_stop=True)
