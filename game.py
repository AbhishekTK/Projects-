# -*- coding: utf-8 -*-
"""
Created on Mon Apr 15 20:58:16 2019

@author: abhi06tk
"""
import pygame

pygame.init()

win = pygame.display.set_mode((900,300))

pygame.display.set_caption("First Game")

x = 50
y = 250
width = 10
height = 50
vel = 5

isJump = False
jumpCount = 10

run = True
while run:
    pygame.time.delay(50)
    
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            run = False

    pygame.draw.rect(win, (255, 0, 0), (x, y, width, height))
    pygame.display.update()
    
    keys = pygame.key.get_pressed()
    
    if keys[pygame.K_RIGHT]:
        x += vel
        
    if not(isJump):
        if keys[pygame.K_SPACE]:
            isJump = True
    else:
        if jumpCount >= -10:
            neg = 1
            if jumpCount < 0:
                neg = -1 
            y -= (jumpCount ** 2) * 0.5 * neg
            jumpCount -= 1
        else:
            isJump = False
            jumpCount = 10
                
    win.fill((0,0,0))
pygame.quit ()
