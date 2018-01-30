#include<graphics.h>
#include<conio.h>
#include<stdio.h>
#include<dos.h>
void drawtitanic(int,int,int);
void drawWater(int ,int ,int);
void main()
{
	int midx=50,midy=215;
	int gd=DETECT,gm;
	int icemid=300;
	clrscr();
   //	int gd=DETECT,gm;
	initgraph(&gd,&gm,"C:\\TURBOC3\\BGI\\");
   //	int midx=50,midy=215;
	drawWater(225,LIGHTBLUE,BLUE);
	while(midx<=200)
	{

		drawtitanic(midx,midy,WHITE);
		delay(10);
		if(midx!=200)
			drawtitanic(midx,midy,BLACK);
		midx++;
	}
//	int icemid=300;
	while(icemid>=200)
	{
		setfillstyle(SOLID_FILL,WHITE);
		pieslice(350,icemid,0,180,50);
		icemid--;
		delay(10);
	}
	setfillstyle(SOLID_FILL,BLACK);
	while(midx<=500)
	{
		drawtitanic(midx-1,midy,BLACK);
		drawtitanic(midx,midy,WHITE);
		delay(10);
		if(midx!=500)
			drawtitanic(midx,midy,BLACK);
		midx++;
	}
	setfillstyle(SOLID_FILL,BLACK);
	floodfill(350,180,BLACK);
	setfillstyle(SOLID_FILL,WHITE);
	pieslice(350,240,0,180,50);
	outtextxy(200,100,"TOOTEGI KAISE AMBUJA CEMENT SE JO BANI HAI....");
	while(midx<=700)
	{
		drawtitanic(midx-1,midy,BLACK);
		drawtitanic(midx,midy,WHITE);
		delay(10);
		if(midx!=700)
			drawtitanic(midx,midy,BLACK);
		midx++;
	}
	getch();
	closegraph();
}
void drawtitanic(int x,int y,int color)
{
	setcolor(color);
	line(x-50,y,x+50,y);
	line(x-37,y+25,x+37,y+25);
	line(x-50,y,x-37,y+25);
	line(x+50,y,x+37,y+25);
	line(x-5,y,x-5,y-25);
	line(x-15,y,x-15,y-25);
	line(x-25,y,x-25,y-25);
	line(x-35,y,x-35,y-25);
	line(x+5,y,x+5,y-25);
	line(x+15,y,x+15,y-25);
	line(x+25,y,x+25,y-25);
	line(x+35,y,x+35,y-25);
	line(x+5,y-25,x+15,y-25);
	line(x+25,y-25,x+35,y-25);
	line(x-5,y-25,x-15,y-25);
	line(x-35,y-25,x-25,y-25);
	setfillstyle(SOLID_FILL,BLACK);
	floodfill(x,y+10,color);
	outtextxy(x-30,y+10,"TITANIC");
}
void drawWater(int y,int wcolor,int wavecolor)
 {
	int i;
	setcolor(wavecolor);
	for(i=25;i<675;i+=50)
		arc(i,y,180,360,25);
	setfillstyle(SOLID_FILL,wcolor);
	floodfill(50,y+25,wavecolor);

}